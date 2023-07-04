<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\ReportDetailForm;




class ReportDetailCtrl
{
    private $records;
    private $form;

    public function __construct()
    {

        $this->form = new ReportDetailForm();
    }

    public function validateReport()
    {
        $this->form->id = ParamUtils::getFromGet("report");

        return !App::getMessages()->isError();
    }

    public function action_reportDetail()
    {

        if ($this->validateReport())
        {
            $where = ["id_report" => $this->form->id];
                try {

                    $this->records = App::getDB()->select("report", [
                        "[><]status_type" => ["id_status" => "id_status"],
                        "[><]repair_type" => ["id_repair" => "id_repair"],
                        "[><]device_type" => ["id_device" => "id_device"],],
                        [
                        "id_report",
                        "report.name(report_name)",
                        "report.surname(report_surname)",
                        "phone",
                        "model",
                        "description",
                        "comment",
                        "cost",
                        "date_of_report",
                        "date_of_repair",
                        "repair_type.name(repair_name)",
                        "device_type.name(device_name)",
                        "status_type.name(status_name)"], $where);

    } catch (\PDOException $e) {
        Utils::addErrorMessage('Wystąpił błąd podczas pobrania rekordu');

    }
    $this->generateView();
}
    }
    public function generateView()
    {
        App::getSmarty()->assign('reports', $this->records);
        App::getSmarty()->display('reportDetail.tpl');
    }

}


