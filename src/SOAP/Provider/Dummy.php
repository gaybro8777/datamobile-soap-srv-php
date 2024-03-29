<?php

namespace Kily\DM\SOAP\Provider;

class Dummy extends AbstractProvider
{
    public function SOAP_IsNewData($SN, $UserName)
    {
        return ['return' => [
            'DMClearArts' => true,
            'DMClearCells' => false,
            'DMClearTemplates' => true,
            'DMClearUsers' => false,
            'DMClearDocs' => false,
            'DMClearClients' => true,
            'DMClearUnits' => true,
            'DMNewArts' => true,
            'DMNewCells' => true,
            'DMNewTemplates' => true,
            'DMNewUsers' => false,
            'DMNewDocs' => true,
            'DMNewClients' => true,
            'DMNewUnits' => true,
        ]];
    }

    public function SOAP_GetCells($SN, $UserName)
    {
        $cells = [];
        foreach (range(1, 100) as $i) {
            $cells[] = [
                'DMCellName' => 'Cell '.$i,
                'DMBarcode' => 'CELL-'.$i,
                'DMTaskQNT' => 0,
            ];
        }

        return ['return' => $cells];
    }

    public function SOAP_GetNewArts($SN, $UserName)
    {
        $prods = [];
        $prods[] = array(
            'DMArtName' => 'BASK ROUTE V2 WHITE : XS',
            'DMArtID' => '4149A-70334-XS',
            'DMArtPrice' => '12790',
            'DMBarcode' => '',
            'DMUseSN' => '0',
            'DMisMark' => '0',
            'DMMeasureK' => '1',
            'DMMeasureName' => 'шт.',
            'DMTaskQnt' => '1',
            'DMLimitQnt' => '0',
            'DMArtAttr1' => null,
            'DMArtAttr2' => null,
            'DMArtAttr3' => null,
            'DMArtAttr4' => null,
            'DMArtAttr5' => null,
            'DMArtAttr6' => null,
            'DMArtAttr7' => null,
            'DMArtAttr8' => null,
            'DMArtAttr9' => null,
            'DMArtAttr10' => null,
            'DMBarcodeList' => array(
                array(
                    'DMBarcode' => '1234561234567',
                    'DMMeasureName' => 'шт.',
                    'DMMeasureK' => '1',
                    'DMisMark' => '0',
                ),
            ),
        );
        $prods[] = array(
            'DMArtName' => 'BASK HEAVEN V2 GREY : 52',
            'DMArtID' => '3945A-70360-052',
            'DMArtPrice' => '10990',
            'DMBarcode' => '',
            'DMUseSN' => '0',
            'DMisMark' => '0',
            'DMMeasureK' => '1',
            'DMMeasureName' => 'шт.',
            'DMTaskQnt' => '1',
            'DMLimitQnt' => '0',
            'DMArtAttr1' => null,
            'DMArtAttr2' => null,
            'DMArtAttr3' => null,
            'DMArtAttr4' => null,
            'DMArtAttr5' => null,
            'DMArtAttr6' => null,
            'DMArtAttr7' => null,
            'DMArtAttr8' => null,
            'DMArtAttr9' => null,
            'DMArtAttr10' => null,
            'DMBarcodeList' => array(
                array(
                    'DMBarcode' => '7654321654321',
                    'DMMeasureName' => 'шт.',
                    'DMMeasureK' => '1',
                    'DMisMark' => '0',
                ),
            ),
        );

        return ['return' => $prods];
    }

    public function SOAP_GetTemplates($SN, $UserName)
    {
        $items = [];
        $items[] = array(
            'DMTemplateID' => '35',
            'DMIsMark' => false,
            'DMTemplateName' => 'Инвентаризация (простая)',
            'UsePhotofixationSelect' => false,
            'UsePhotofixationInsert' => false,
            'DMDisableReaderChangeClient' => false,
            'DMreaderTrack1Use' => false,
            'DMreaderTrack2Use' => false,
            'DMreaderTrack3Use' => false,
            'DMEnableNew' => '1',
            'DMLoadArtsWithRows' => '0',
            'DMLoadRowsOnOpen' => '0',
            'DMDisableManualChangeClient' => '1',
            'DMnewPackOnWS' => '0',
            'DMuseBCTemplates' => '0',
            'DMuseSelectLogAsInsertTask' => '0',
            'DMonUploadIncorrectDoc' => '0',
            'DMuseArt_Insert' => '0',
            'DMuseAllBarcode' => '1',
            'DMuse_Select' => '1',
            'DMonArtScan_Select' => '1',
            'DMonTaskQty_Select' => '0',
            'DMuseCellOnTask_Select' => '0',
            'DMuseSN_Select' => '0',
            'DMuseSN_Insert' => '0',
            'DMonLimitQty_Select' => '0',
            'DMonTaskQty_Insert' => '0',
            'DMquantEnable_Select' => '0',
            'DMenterToCommit_Select' => '0',
            'DMwriteRecordToWS_Select' => '0',
            'DMuseCell_Select' => '0',
            'DMuse_Insert' => '0',
            'DMuseSNOnTask_Select' => '0',
            'DMonLimitQty_Insert' => '0',
            'DMuseCell_Insert' => '0',
            'DMusePack_Select' => '0',
            'DMuniquebarcodedoc' => '0',
            'DMuseCellOnTask_Insert' => '0',
            'DMuseSNOnTask_Insert' => '0',
            'DMonArtScan_Insert' => '0',
            'DMonNewArt' => '0',
            'DMenterToCommit_Insert' => '0',
            'DMwriteRecordToWS_Insert' => '0',
            'DMPrintLabel_Insert' => '0',
            'DMPrintLabel_Select' => '0',
            'DMEnterCell_Select' => '0',
            'DMquantEnable_Insert' => '0',
            'DMEnterCell_Insert' => '0',
            'DMusePack_Insert' => '0',
            'DMMultiDocSound' => '1',
            'DMoneArtReplaceMode' => '0',
            'DMMultiDocTimeout' => '60',
            'DMMultiDoc' => '0',
        );

        return ['return' => $items];
    }

    public function SOAP_GetUsers($SN, $UserName)
    {
        $items = [];
        $items[] = [
            'DMLogin' => 'dummyuser',
            'DMName' => 'Dummy',
            'DMPass' => '',
            'DMIsAdmin' => true,
            'DMEnableEditArts' => true,
        ];

        return ['return' => $items];
    }

    public function SOAP_GetDocHeads($SN, $UserName)
    {
        $items = [];
        $items[] = [
            'DMNumber' => '094e2308835da80d9a259b7dca9aa014',
            'DMDate' => '2016-02-19 18:43:26',
            'DMComment' => 'Из SalesPoint (автоматически)',
            'DMBarcode' => null,
            'DMisLoaded' => '0',
            'DMClientSelectDate' => null,
            'DMDocOutID' => '155',
            'DMTemplate' => $this->SOAP_GetTemplates($SN, $UserName)['return'][0],
            'DMClient' => $this->SOAP_GetClients($SN, $UserName)['return'][0],
            'DMisMark' => false,
        ];

        return ['return' => $items];
    }

    public function SOAP_GetDocRowsSelect($SN, $UserName, $DocOutID)
    {
        $items = [];
        $items[] = [
            'DMBarcode' => null,
            'DMSN' => null,
            'DMCell' => '1',
            'DMArtID' => $this->SOAP_GetNewArts($SN, $UserName)['return'][0]['DMArtID'],
            'DMPackID' => null,
            'DMQuant' => '1',
            'DMArtName' => $this->SOAP_GetNewArts($SN, $UserName)['return'][0]['DMArtName'],
            'DMLimit' => 5,
        ];

        return ['return' => $items];
    }

    public function SOAP_GetDocRowsInsert($SN, $UserName, $DocOutID)
    {
        $items = [];
        $items[] = [
            'DMBarcode' => null,
            'DMSN' => null,
            'DMCell' => '1',
            'DMArtID' => $this->SOAP_GetNewArts($SN, $UserName)['return'][0]['DMArtID'],
            'DMPackID' => null,
            'DMQuant' => '1',
            'DMArtName' => $this->SOAP_GetNewArts($SN, $UserName)['return'][0]['DMArtName'],
            'DMLimit' => 5,
        ];

        return ['return' => $items];
    }

    public function SOAP_OnArtScanSelect($SN, $UserName, $Barcode, $DocOutID, $Cell)
    {
        $items = [];
        $items[] = [
            'DMArtName' => 'BASK ROUTE V2 WHITE : XS',
            'DMArtID' => '4149A-70334-XS',
            'DMArtPrice' => '12750',
            'DMArtAttr1' => null,
            'DMArtAttr2' => null,
            'DMMeasureName' => 'шт.',
            'DMMeasureK' => '1',
            'DMTaskQnt' => '1',
            'DMLimitQnt' => '0',
            'DMArtAttr3' => null,
            'DMArtAttr4' => null,
            'DMArtAttr5' => null,
            'DMArtAttr6' => null,
            'DMArtAttr7' => null,
            'DMArtAttr8' => null,
            'DMArtAttr9' => null,
            'DMArtAttr10' => null,
            'DMUseSN' => 'false',
        ];

        return ['return' => $items];
    }

    public function SOAP_OnArtScanInsert($SN, $UserName, $Barcode, $DocOutID, $Cell)
    {
        $items = [];
        $items[] = [
            'DMArtName' => 'BASK ROUTE V2 WHITE : XS',
            'DMArtID' => '4149A-70334-XS',
            'DMArtPrice' => '12750',
            'DMArtAttr1' => null,
            'DMArtAttr2' => null,
            'DMMeasureName' => 'шт.',
            'DMMeasureK' => '1',
            'DMTaskQnt' => '1',
            'DMLimitQnt' => '0',
            'DMArtAttr3' => null,
            'DMArtAttr4' => null,
            'DMArtAttr5' => null,
            'DMArtAttr6' => null,
            'DMArtAttr7' => null,
            'DMArtAttr8' => null,
            'DMArtAttr9' => null,
            'DMArtAttr10' => null,
            'DMUseSN' => 'false',
        ];

        return ['return' => $items];
    }

    public function SOAP_OnWriteRecSelect($SN, $UserName, $DocOutID, $DocRec)
    {
        return ['return' => true];
    }

    public function SOAP_OnWriteRecInsert($SN, $UserName, $DocOutID, $DocRec)
    {
        return ['return' => true];
    }

    public function SOAP_OnCellScan($SN, $UserName, $Barcode, $DocOutID)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_OnNewPack($SN, $UserName, $DocOutID)
    {
        return ['return' => $DocOutID.'-'.rand(1, 9999)]; // FIXME: it is better to implement here sequential ID
    }

    public function SOAP_DeleteDoc($SN, $UserName, $DocOutID)
    {
        return ['return' => true];
    }

    public function SOAP_ClearDoc($SN, $UserName, $DocOutID)
    {
        return ['return' => true];
    }

    public function SOAP_ReopenDoc($SN, $UserName, $DocOutID)
    {
        return ['return' => true];
    }

    public function SOAP_SetDocComment($SN, $UserName, $DocOutID, $Comment)
    {
        return ['return' => true];
    }

    public function SOAP_SetDocNumber($SN, $UserName, $DocOutID, $Number)
    {
        return ['return' => true];
    }

    public function SOAP_WriteDoc($SN, $UserName, $DocHead, $DocRowsSelect, $DocRowsInsert)
    {
        return ['return' => true];
    }

    public function SOAP_CreateDoc($SN, $UserName, $DocOutID, $TemplateID)
    {
        $item = [
            'DMDocOutID' => '2',
            'DMNumber' => '2',
            'DMDate' => '2016-03-07T14:08:27',
            'DMComment' => 'test comment',
            'DMBarcode' => '194e2308835da80d9a259b7dca9aa014',
            'DMTemplate' => [
                'DMTemplateID' => 35,
                'DMIsMark' => false,
                'DMTemplateName' => 'Инвентаризация (простая)',
                'DMEnableNew' => true,
                'DMLoadArtsWithRows' => false,
                'DMLoadRowsOnOpen' => false,
                'DMDisableManualChangeClient' => true,
                'DMDisableReaderChangeClient' => false,
                'DMreaderTrack1Use' => false,
                'DMreaderTrack2Use' => false,
                'DMreaderTrack3Use' => false,
                'DMnewPackOnWS' => false,
                'DMuseBCTemplates' => false,
                'DMuseSelectLogAsInsertTask' => false,
                'DMonUploadIncorrectDoc' => 0,
                'DMuseArt_Insert' => false,
                'DMuseAllBarcode' => true,
                'DMuse_Select' => true,
                'DMonArtScan_Select' => 1,
                'DMonTaskQty_Select' => 0,
                'DMonLimitQty_Select' => 0,
                'DMuseCell_Select' => 0,
                'DMuseSN_Select' => 0,
                'DMusePack_Select' => 0,
                'DMuseCellOnTask_Select' => false,
                'DMuseSNOnTask_Select' => false,
                'DMquantEnable_Select' => false,
                'DMenterToCommit_Select' => false,
                'DMwriteRecordToWS_Select' => false,
                'DMuse_Insert' => false,
                'DMonArtScan_Insert' => 0,
                'DMonTaskQty_Insert' => 0,
                'DMonLimitQty_Insert' => 0,
                'DMuseCell_Insert' => 0,
                'DMuseSN_Insert' => 0,
                'DMusePack_Insert' => 0,
                'DMuseCellOnTask_Insert' => false,
                'DMuseSNOnTask_Insert' => false,
                'DMquantEnable_Insert' => false,
                'DMenterToCommit_Insert' => false,
                'DMwriteRecordToWS_Insert' => false,
                'DMPrintLabel_Insert' => 0,
                'DMPrintLabel_Select' => 0,
                'DMonNewArt' => 0,
                'DMoneArtReplaceMode' => false,
                'DMuniquebarcodedoc' => false,
                'DMMultiDoc' => false,
                'DMMultiDocSound' => false,
                'DMMultiDocTimeout' => 0,
                'DMEnterCell_Select' => 0,
                'DMEnterCell_Insert' => 0,
                'UsePhotofixationSelect' => false,
                'UsePhotofixationInsert' => false,
            ],
            'DMisMark' => false,
            'DMisLoaded' => false,
            'DMClient' => [
                'DMName' => '',
                'DMClientID' => '1',
                'DMBarcode' => '',
            ],
            'DMClientSelectDate' => null,
        ];

        return ['return' => $item];
    }

    public function SOAP_GetArtRest($SN, $UserName, $ArtID)
    {
        return ['return' => 5];
    }

    public function SOAP_Login($SN, $UserName)
    {
        return ['return' => true];
    }

    public function SOAP_GetDocArts($SN, $UserName, $DocOutID)
    {
        $items = [];

        return ['return' => $items];
    }

    public function SOAP_GetClients($SN, $UserName)
    {
        $items = [];
        $items[] = [
            'DMClientID' => 1,
            'DMName' => 'BASK',
            'DMBarcode' => 'CLNT-1234565432',
        ];

        return ['return' => $items];
    }

    public function SOAP_SetDocClient($SN, $UserName, $DocOutID, $ClientID)
    {
        return ['return' => true];
    }

    public function SOAP_IsNewDocs($SN, $UserName)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_UpdateArt($SN, $UserName, $Art)
    {
        return [
            'return' => true,
            'Art' => $Art->DMArtID,
        ];
    }

    public function SOAP_UpdateBarcode($SN, $UserName, $ArtID, $Barcode)
    {
        return ['return' => true];
    }

    public function SOAP_GetArtsDrafts($SN, $UserName)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_DeleteArt($SN, $UserName, $Art)
    {
        return ['return' => true];
    }

    public function SOAP_DeleteBarcode($SN, $UserName, $ArtID, $Barcode)
    {
        return ['return' => true];
    }

    public function SOAP_OnCommitAutoInsertOnSelect($SN, $UserName, $Barcode, $DocOutID)
    {
        return ['return' => true];
    }

    public function SOAP_FastAccess($SN, $UserName, $Barcode)
    {
        return ['return' => 'Here may be any information you want to supply, when barcode '.$Barcode.' was scanned'];
    }

    public function SOAP_CountDiscount($SN, $UserName, $Barcode, $DocOutID)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_GetBalance($SN, $UserName, $ArtID)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_Logout($SN, $UserName)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_GetPicture($ArtID)
    {
        return ['return' => file_get_contents('http://cs623918.vk.me/v623918000/dfb9/k3Paagw4C2A.jpg')];
    }

    public function SOAP_OnPalletScan($SN, $UserName, $DocOutID)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_IsNewOnlineDocData($SN, $UserName, $DocOutID)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_SetRowPhoto($SN, $UserName, $DocID, $ArtID, $Barcode, $Byte)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_SetDocPhoto($SN, $UserName, $DocID, $Byte)
    {
        throw new \SoapFault('Server', __FUNCTION__.' not implemented');
    }

    public function SOAP_GenerateNewBC($SN, $UserName, $ArtID, $UnitID, $P1, $P2)
    {
        return ['return' => rand(100, 999).rand(100, 999).rand(100, 999).rand(100, 999).rand(100, 999).rand(10, 99)];
    }

    public function SOAP_GetArtCells($SN, $UserName, $ArtID, $DocID)
    {
        return ['return' => array_slice($this->SOAP_GetCells($SN, $UserName)['return'], 0, 2)];
    }

    public function SOAP_FastAccessDoc($SN, $UserName, $DocID, $Barcode)
    {
        return ['return' => 'Here may be any information you want to supply for document '.$DocID.', when barcode '.$Barcode.' was scanned.'];
    }

    public function SOAP_GetUnits($SN, $UserName)
    {
        $items = [];
        $items[] = [
            'DMUnitID' => 1,
            'DMUnitName' => 'шт.',
        ];

        return ['return' => $items];
    }

    public function SOAP_SendArtToPrint($SN, $UserName, $ArtID, $Barcode, $Count)
    {
        return ['return' => true];
    }

    public function SOAP_SendDocToPrint($SN, $UserName, $DocID)
    {
        return ['return' => true];
    }

    public function SOAP_SendPackToPrint($SN, $UserName, $DocID, $Pack)
    {
        return ['return' => true];
    }
}
