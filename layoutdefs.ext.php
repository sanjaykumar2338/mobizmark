<?php 
 //WARNING: The contents of this file are auto-generated

 
$layout_defs['Accounts']['subpanel_setup']['opp_closed_lost'] =
        array('order' => 49,
            'module' => 'Opportunities',
            'subpanel_name' => 'ForAccounts',
            'get_subpanel_data' => 'function:get_closed_lost_closed_won_opportunities',
            'generate_select' => true,
            'title_key' => 'Account Feed',
            'top_buttons' => array(),
            'function_parameters' => array(
                'import_function_file' => 'custom/modules/Accounts/customOpportunitiesSubpanel.php',
                'sales_stage' => 'Closed Lost',
                'account_id' => $this->_focus->id,
                'return_as_array' => 'true'
            ),
);

//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['documents']['override_subpanel_name'] = 'Account_subpanel_documents';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['account_aos_contracts']['override_subpanel_name'] = 'Account_subpanel_account_aos_contracts';


//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['contacts']['override_subpanel_name'] = 'Account_subpanel_contacts';

?>