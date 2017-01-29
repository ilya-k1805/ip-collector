<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Terms of use';

?>

To use this Site, please accept the following Terms of Use:




GENERAL TERMS OF USE

1. The parties and the subject of the contract

THE TERMS OF USE SET FORTH BELOW GOVERN YOUR USE OF THIS SITE. THESE TERMS ARE A LEGAL CONTRACT BETWEEN YOU (''USER'') AND ip-collector.com ("SITE") AND GOVERN YOUR ACCESS TO THE SITE AND SERVICES AVAILABLE THROUGH THE SITE.

IF YOU DO NOT AGREE WITH ANY OF THESE TERMS, DO NOT ACCESS OR OTHERWISE USE THE SITE OR ANY INFORMATION CONTAINED ON THE SITE. YOUR USE OF THE SITE WILL BE CONSIDERED YOUR AGREEMENT TO ABIDE BY EACH OF THE TERMS SET FORTH BELOW.

2. Parties’ rights and duties (possibilities and liabilities) 

2.1 User:

2.1.1. User may download or copy the content and other items displayed on the Site for personal use only, provided that all copyright and other notices contained in such content are maintained. User may not modify, publish, transmit, participate in the transfer or sale of, reproduce, create derivative works based on, distribute, perform, display, or in any way exploit any of the content located on the Site in whole or in part. User shall not store any content of significant size in any form. Copying or storing of any content is prohibited without prior written permission from the administration of the Site.

2.1.2. User agrees to evaluate and bear all risks associated with the use of any content, including reliance on the accuracy and completeness of such content. 

2.1.3. User may link to the Site only having prior written permission from the administration of the Site. 

2.1.4. Passing the registration on the Site, User may become:

2.1.4.1. Advanced User – User, who has access to detailed information on Debtors, posted on the Site;

2.1.4.2. Creditor - User, who has access to detailed information on Debtors, posted on the Site and has the right to provide the administration of the Site with information about non-fulfillment of obligations under a contract by its debtor ("Debtor") in order to post the above-mentioned information on the Site and settle the dispute; 

2.1.4.3. Debtor – User, which entered a contract with the Creditor and hasn’t carried out his/her obligation before the Creditor. Information about the debts and Debtors is provided by Creditors.

2.1.5. Immediately after the registration on the Site User must read the Terms of Use according to a new status: The Terms of Use for Advanced Users/ The Terms of Use for Creditors/ The Terms of Use for Debtors, published on the Site.

2.2 Site:

2.2.1. All intellectual property rights in relation to the content of the Site are reserved and owned by the administration of the Site.

2.2.2. The administration of the Site reserves the right to change these Terms of Use at any time by posting amended Terms of Use on the Site.

IF ANY MODIFICATION IS UNACCEPTABLE TO USER, USER SHALL CEASE USING THE SITE. IF USER DOES NOT CEASE USING THE SITE, USER WILL BE CONCLUSIVELY DEEMED TO HAVE ACCEPTED THE AMENDMENTS.

2.2.3. The administration of the Site has no control over and no duty to take any action regarding: which Users gain access to the Site; what content User accesses via the Site; what effects the content may have on User; how User may interpret or use the content; or what actions User may take as a result of having been exposed to the content. 

2.2.4. The Site is provided on an "as is" and "as available" basis, without warranty of any kind, either express or implied, including, without limitation, implied warranties of merchantability and fitness for a particular purpose. The administration of the Site makes no warranty that the Site will meet User’s requirements, or that the Site will be uninterrupted, timely, secure or error free; nor does the administration of the Site make any warranty as to the results that may be obtained from the use of the Site or the services provided by the Site.

2.2.5. The administration of the Site shall have the right, in its sole discretion, to edit or move any content that is available on the Site. Without limiting the foregoing, the administration of the Site shall have the right to remove any content that violates the Terms of Use or is otherwise objectionable. 

2.2.6. The Site is not the mass media.

3. Payment

Access to the Site and the use of materials published on the Site are free of charge. 

4. Terms

This agreement comes into force for Parties from the moment of User’s acceptance. User accepts these Terms of Use by clicking the button "Accept" below these Terms of Use. Confirming the acceptance of these Terms of Use, User at the same time consents to this agreement, undertaking the implementation of all duties foreseen by it. In case of changing this agreement by the administration of the Site, its previous release loses force and a new release goes into effect for User from the moment of its publication on the Site. By using the Site, User indicates his/her agreement to be bounded by the Terms of Use published on the Site. These Terms of Use and any additional terms (new releases) constitute the entire agreement between the parties as to subject matter hereof. 

5. Limitation of Liability

The Site may contain information that some people may find offensive or inappropriate.

Any information placed on the Site is the views and responsibility of those who post it and does not represent the views of the administration of the Site. The information posted on the Site is relevant on the date of placement on the Site, but the fulfillment of the obligation(s) by Debtor before its Creditor(s) isn’t the compulsory basis for moving the information about the debt from the database of the Site. The main basis for moving the information about the debt from the database of the Site is the fulfillment of the obligation(s) by Debtor before its Creditor(s) and the fulfillment of the obligations before the Site according to the Debtor’s Terms of Use.

THE ADMINISTRATION OF THE SITE SHALL NOT BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, PUNITIVE OR CONSEQUENTIAL DAMAGES, RESULTING FROM THE USE OR THE INABILITY TO USE THE SITE. SOME JURISDICTIONS DO NOT ALLOW THE LIMITATION OR EXCLUSION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES, THUS SOME OF THE ABOVE LIMITATIONS MAY NOT APPLY TO USER.

6. Miscellaneous

These Terms of Use and any additional terms constitute the entire understanding between the parties as to subject matter hereof.

There are separate special Terms of Use for each group of registered users (Advanced Users, Creditors, Debtors) which are more detailed.

These General Terms of Use are applied in whole or in part, which does not contradict the Terms of Use for each group of registered users.

<?php
	$form = ActiveForm::begin();  
?>

<div>
    <?= Html::submitButton('Accept', ['class' => 'btn btn-primary','name' => 'accept']) ?>
    <?= Html::submitButton('Cancel', ['class' => 'btn btn-primary','name' => 'cancel']) ?>
</div>

<?php
	ActiveForm::end();
?>