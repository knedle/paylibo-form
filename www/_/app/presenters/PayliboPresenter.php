<?php

use Nette\Application\UI,
    Nette\Security as NS;

/**
 * Paylibo presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class PayliboPresenter extends BasePresenter {

    protected function startup() {
        parent::startup();

        // nacteni session
        $session = $this->session;
        $this->section = $session->getSection('paylibo');
    }

    public function renderDefault() {
        //$this->template->anyVariable = 'any value';
    }

    /**
     *
     * @return \Nette\Application\UI\Form 
     */
    protected function createComponentPayliboForm() {
        $form = new UI\Form;

        $form->setMethod('GET');
        $form->getElementPrototype()->class[] = "well";        
        
        $form->addText('accountPrefix', 'Předčíslí účtu příjemce:')                
                ->addCondition(UI\Form::FILLED)        
                ->addRule(UI\Form::NUMERIC, 'Jen čísla...');
         
        $form->addText('accountNumber', 'Číslo účtu příjemce:')                
                ->setAttribute('required', 'required')
                ->setAttribute('placeholder', 'povinný údaj')
//                ->setType('number')
                ->setRequired('Bez čísla účtu příjemce to nepůjde...')
                ->addRule(UI\Form::NUMERIC, 'Jen čísla...')
        ;

        $form->addText('bankCode', 'Kód banky příjemce:')                
                ->setAttribute('required', 'required')
                ->setAttribute('placeholder', 'povinný údaj')
//                ->setType('number')
                ->setRequired('Bez kódu banky to nepůjde...')
                ->addRule(UI\Form::NUMERIC, 'Jen čísla...')
        ;

        $form->addText('amount', 'Částka platby:')
                ->setAttribute('required', 'required')
                ->setAttribute('placeholder', 'povinný údaj')
//                ->setType('number')
                ->setRequired('Bez částky to nepůjde...')
                ->addRule(UI\Form::NUMERIC, 'Jen čísla...')
        ;

        $form->addText('currency', 'Měna platby:')
                ->setDefaultValue('CZK')
        ;

        $form->addText('vs', 'Variabilní symbol:')
                ->addCondition(UI\Form::FILLED)
                ->addRule(UI\Form::NUMERIC, 'Jen čísla...')
        ;

        $form->addText('ks', 'Konstantní symbol:')
                ->addCondition(UI\Form::FILLED)
                ->addRule(UI\Form::NUMERIC, 'Jen čísla...')
        ;

        $form->addText('ss', 'Specifický symbol:')
                ->addCondition(UI\Form::FILLED)
                ->addRule(UI\Form::NUMERIC, 'Jen čísla...')
        ;

        $form->addText('identifier', 'Interní ID platby:');

        $form->addText('date', 'Datum platby:')
                ->setType('date')                                
                ;

        $form->addText('message', 'Zpráva pro příjemce:');

        $form->addSubmit('getCode', 'získej platební QR kód');

        $form->onSuccess[] = callback($this, 'payliboFormSubmitted');
        return $form;
    }

    /**
     *
     * @param \Nette\Application\UI\Form $form 
     */
    public function payliboFormSubmitted($form) {

        $values = $form->getValues();

        $tmpValues = $values;
        // odsranit prazdne
        foreach ($values as $key => $value) {
            if (empty($value)) {
                unset($values[$key]);
            }
        }
        
        if (!empty($values['date'])) {
            $date = new DateTime($values['date']);
            $values['date'] = $date->format("Y-m-d");
        }

        // ziskat QR code 
        // precteme cesty co jsou v config.neon - je nejaka rychlejsi cesta?
        $parameters = $this->getContext()->getParameters();
        $stringUrl = $parameters['paylibo']['string'] . '?' . http_build_query($values);
        $qrCodeUrl = $parameters['paylibo']['qrcode'] . '?' . http_build_query($values);

        $headers = get_headers($stringUrl);
        
        $this->template->values = $values;

        if (preg_match("/200 OK/", $headers[0])) {

            $payliboString = file_get_contents($stringUrl);

            
            $this->template->stringUrl = $stringUrl;
            $this->template->payliboString = $payliboString;
            $this->template->qrCodeUrl = $qrCodeUrl;
        } else {
            $this->template->error404 = true;
            $this->flashMessage('Generátor vrátil chybu - špatná vstuní data?');
        }


        // presmerovavat nebudem, posilame si data pres GET
        //$this->redirect('this');
    }

}
