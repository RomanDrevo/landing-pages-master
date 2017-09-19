@extends('layouts.main')


@section('extra_styles')

    <link rel="stylesheet" href="/landing-assets/millionairetrader/css/style.css" />

@endsection

@section("content")




    <input type="hidden" id="tracking" value="no_tracking" />
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center blackbg">
                <h1>LEARN HOW YOU CAN MAKE A FORTUNE WITH <br>
                    <span>ONE OF THE BEST KEPT SECRETS</span></h1>
            </div>
            <div class="col-lg-12 col-md-12 text-center whiteBg hidden-lg hidden-md ">
                <h1 class="whitefont">JUST <span class="red">50 SPOTS</span> AVAILABLE</h1>
            </div>
        </div>
    </div>
    <div class="container" id="main-content">
        <div class="row whiteBg pd30">
            <div class="col-lg-8 col-md-8 col-sm-12 nopadding">
                <div class="movie">
                    <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="https://fast.wistia.net/embed/iframe/f0ze8oqs1e?videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div></div>
                    <script src="../../../../fast.wistia.net/assets/external/E-v1.js" async></script>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 nopadding" >
                <div class="textContent">
                    <div class="timerBox hidden-xs hidden-sm">
                        <div class="timerHeader">JUST 50 SPOTS AVAILABLE</div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 whiteBg">
                                <div class="timerIcon"></div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 whiteBg brdleft">
                                <div class="timerCountdown timer" id="myTimer" data-minutes-left="13.59"></div>
                            </div>
                        </div>
                        <script>
                            var mins = 15;  //Set the number of minutes you need
                            var secs = mins * 60;
                            var currentSeconds = 0;
                            var currentMinutes = 0;
                            /*
                             * The following line has been commented out due to a suggestion left in the comments. The line below it has not been tested.
                             * setTimeout('Decrement()',1000);
                             */
                            setTimeout(Decrement,1000);

                            function Decrement() {
                                currentMinutes = Math.floor(secs / 60);
                                currentSeconds = secs % 60;
                                if(currentSeconds <= 9) currentSeconds = "0" + currentSeconds;
                                secs--;
                                document.getElementById("myTimer").innerHTML = currentMinutes + ":" + currentSeconds; //Set the element id you need the time put into.
                                if(secs !== -1) setTimeout('Decrement()',1000);
                            }
                        </script>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row boxheight ">
                        <div class="redFont">DON'T MISS OUT!</div>
                        <div class="arrow_box"></div>
                        <div class="clearfix"></div>

                    </div>
                    <form method="POST" id="registration_form">
                        {{ csrf_field() }}
                        <input type="hidden" name="source_id" id="source_token" value="{{$source->stoken}}">

                        <div class="row filling">
                            <div class="col-lg-12">
                                <input type="text" class="form-control textbox" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-lg-12 ">
                                <input type="email" class="form-control textbox" id="email" name="email" placeholder="Email" required>
                                <input type="text" class="form-control textbox" name="phone" id="phone" placeholder="your phone">
                            </div>
                            <div class="col-lg-12 text-center">
                                <input type="submit" id="submitFormButton" class="btn btn-primary greenBtn submit" value="SUBMIT"/>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center logos">
                <img src="/landing-assets/millionairetrader/images/logo-1.png" width="76" height="76" alt="Top Profit System 2016 Logo"/>
                <img src="/landing-assets/millionairetrader/images/logo-2.png" width="76" height="76" alt="Trade Trust logo"/>
                <img src="/landing-assets/millionairetrader/images/logo-3.png" width="76" height="76" alt="VIP Logo"/>
                <img src="/landing-assets/millionairetrader/images/logo-4.png" width="76" height="76" alt="SSL Logo"/>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Button trigger modal -->
                <div class="disc">
                    <a type="button" data-toggle="modal" data-target="#TermsModal">
                        Terms of Use
                    </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a type="button" data-toggle="modal" data-target="#EarnModal">
                        Earnings Disclaimer
                    </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a type="button" data-toggle="modal" data-target="#PrivacyModal">
                        Privacy Policy
                    </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                    <a type="button" data-toggle="modal" data-target="#AntiSpamModal">
                        Anti-Spam Policy
                    </a>&nbsp;&nbsp;|&nbsp;&nbsp;
                </div>
                <!-- Terms Modal -->
                <div class="modal fade" id="TermsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">TERMS OF USE</h4>
                            </div>
                            <div class="modal-body">
                                We thank you for visiting the website, which lead you to these Terms of Use (henceforth the “Website”). This Website is an internet property belonging to Millionaire-Trader (henceforth referred to collectively as “we”, “us”, and “Millionaire-Trader”).  At any time that you access the website, participate or register for contests, sweepstakes and promotions offered by Millionaire-Trader,  subscribe to the mailing list or newsletter, request information via the website, join or try join an affiliate program, sign up for any memberships services on the website, or order either a product or service through the website (henceforth “the Services”, comprising Vendor Services, Subscription Services and Membership Services) you agree to Millionaire-Trader’s Website Terms of Use, in their entirety.<br><br>
                                Also expressly included in “the Agreement” are the “Privacy Policy”, the “Purchase Agreement”, the “Membership Agreement" along with other policies, price schedules, operating rules or other auxiliary terms and conditions, or document periodically published. This will collectively be referred to henceforth as the Agreement.  Users are requested to review the terms of the agreement carefully. If a user does not agree with any of the terms, they will not be permitted to use the Website and its services at all. ADDITIONALLY MILLIONAIRE-TRADER, IN ITS SOLE AND EXCLUSIVE DISCRETION, RESERVES THE RIGHT TO DENY ANY INDIVIDUAL ACCESS OF THE SERVICES OR THE WEBSITE.<br><br><br>
                                AGREEMENT SCOPE<br><br>
                                Scope and amendments<br><br>
                                When using the website you agree to the terms and conditions specified in this agreement. This agreement comprises the entire and sole agreement existing between you and Millionaire-Trader, superseding all previous and concurrent agreements, warrantees, representations and understandings regarding the Website and your use of it. Millionaire-Trader in our sole discretion is at liberty to occasionally alter this agreement, without notifying users. The most up-to-date version can be located on the Website and users should regularly check for any updates and changes. With your continued use of the Website and Services, you the user agree to abide with all the terms and conditions outlined in the Agreement effective at the time.<br><br><br>
                                REQUIREMENTS<br><br>
                                The Website and Services of Millionaire-Trader are only applicable to those who may enter legally blinding contracts and are not intended for individuals under the age of eighteen.  Any individual below the age of eighteen is not permitted to access or use the Website and Services.<br><br><br>
                                DESCRIPTION OF THE SERVICES<br><br>
                                Subscription Services<br><br>
                                By registering on the Website and thereafter receiving approval from Millionaire-Trader, a user either for a fee or for free, can attain or attempt to attain the Subscription Services, as per subject to the terms and conditions of the Agreement. The Subscription Services will provide users with “Subscription Content”, namely email content, text and other relevant materials provided by Millionaire-Trader and its third party providers (“Third Party Providers”). To discontinue receiving any Subscription Content users may email Millionaire-Trader at <a href="mailto:support@millionairetrader.net">support@millionairetrader.net</a>. Included in the Subscription Content are comments, options and other material courtesy of Millionaire-Trader and Third Party Providers, and cannot necessarily be relied upon. It is advised to use caution, safety and common sense when utilizing both the Subscription Content and Subscription Services.  You as a user agree that Millionaire-Trader has no obligation and will not incur liabilities to you regarding any Subscription Content. Furthermore Millionaire-Trader does not warrant or represent that the Subscription Content available to users of the Subscription Services is complete, appropriate or accurate.  You agree that Millionaire-Trader is not liable in any manner whatsoever for a user’s inability to operate the Subscription Content and Subscription Services. You also agree that Millionaire-Trader is not liable to you or any other end-users, as well as any third party, for any claim relating to the Subscription Services.<br><br><br>
                                Membership Services<br><br>
                                By registering on the Website, agreeing to the Membership Agreement and attaining approval from Millionaire-Trader, for a fee or for free, you can gain, or attempt to gain Membership in one of the Membership programs offered, as per subject to the terms and conditions of the Agreement and Membership Agreement.  If you require a copy of the Membership Agreement kindly visit the website to review the specific Membership. Membership programs offered by Millionaire-Trader and Third Party Providers enable users to access content, text and other materials, (henceforth “Member Content”, which together with the Subscription Content, will be referred to as the “Content”). Included in the Member Content are comments, options and other material courtesy of Millionaire-Trader and Third Party Providers, and cannot necessarily be relied upon. It is advised to use caution, safety and common sense when utilizing both the Member Content and Membership Services.  You as a user agree that Millionaire-Trader has no obligation and will not incur liabilities to you regarding any Member Content. Furthermore Millionaire-Trader does not warrant or represent that the Member Content available to users of the Membership Services is complete, appropriate or accurate. You agree that Millionaire-Trader is not liable in any manner whatsoever for a user’s inability to operate the Member Content and Membership Services. You also agree that Millionaire-Trader is not liable to you or any other end-users, as well as any third party, for any claim relating to the Membership Services and Member Content.<br><br><br>
                                Vendor Services<br><br>
                                When you complete purchase order forms you can gain, or attempt to gain specific products or services from the website. Such products and services described on the website may include descriptions directly provided by Third Party Provider manufacturers or distributors. Millionaire-Trader does not warrant or represent that these descriptions are complete and accurate.  You as a user agree that Millionaire-Trader is not liable in any manner whatsoever for a user’s inability to attain either products or services from the Website as well as not being liable for any dispute with the sellers, distributors or end-user consumers of the purchased product or services. Furthermore you agree that Millionaire-Trader is not liable for any claims concerning any of the purchased products or services offered on the Website to either you the user or to any other third party.<br><br><br>
                                General<br><br>
                                The information you may be required to submit in order to register for the Services may include some or all of the following: full name, email address, mailing address, company name, home or work telephone number, facsimile number, credit card information or any other pertinent information on the applicable registration form (“Services Registration Data”). The information you provide for the Service Registration Data must be true, accurate, complete and current. Any Service Registration Data determined to be in breach of any part of the Agreement, or the Service Registration Data provided is found to be fraudulent, incomplete, a duplicate or any other way unacceptable, grants Millionaire-Trader, in its sole and exclusive discretion, the right to reject any Service Registration Data. At any time, in its sole discretion, Millionaire-Trader may change the criteria for the Service Registration Data. Unless stated otherwise, any future deals that expand or enhance the current features of the Website offered to you via the Website will be subject to the Agreement. You as a user agree that Millionaire-Trader is not liable in any manner whatsoever for a user’s inability to use or qualify for the Services. You also agree that Millionaire-Trader is not liable to you or any third party, for any discontinuation, suspension or modification of any of the services or any other product, service or promotion extended to the user by Millionaire-Trader or any of its Third Party Providers. Millionaire-Trader won’t have any liability or responsibility to users if they choose to terminate the Agreement or any of the Services offered for any reason. With regards to any dispute you may have with Millionaire-Trader is you agree that refusal to use the Website is your sole right and remedy.<br><br><br>
                                CONTESTS<br><br>
                                From time to time Millionaire-Trader will hold Contests, offering users promotional prizes and other awards. Users may enter the chance to win such promotional prizes, made possible through the Contest, by providing true and accurate information on the applicable contest registration forms and thereby agreeing to the Official Contest Rules applicable to individual Contests. It is necessary to first complete the applicable entry forms in order to enter any Contest featured on the Website. In such cases you agree to provide Contest Registration Data that is true, accurate, complete and current. At any time, in its sole discretion, Millionaire-Trader may change the criteria for the Registration Data<br><br><br>
                                LICENSE GRANT<br><br>
                                As a user, in accordance with the Agreement, you are consented a non-exclusive, non-transferable, revocable and limited license to use and access the Website, Content and any supplementary material. At any time for any reason Millionaire-Trader may terminate this license. The Website and Content may be used on one computer at a time for your own personal, non-commercial use. The Website, Content, Contests and/or Services or any portion thereof may not copied, transferred, emulated,  cloned, rented, leased, modified, sold, disassembled, decompiled, or reserve engineered. No part of the Website, Content, Contests and Services may be reproduced or included in any electronic or mechanical information retrieval system. Any rights not explicitly granted in the Agreement are reserved by Millionaire-Trader. Any device, software or routine that is operated by users to interfere or attempt to interfere with the proper functioning of the website is forbidden. Users cannot participate in any action that inflicts an excessively or top-heavy load on Millionaire-Trader’s infrastructure. A user’s right to access and use the Website, Content, Contests or Services is not transferable.<br><br><br>
                                PROPRIETARY RIGHTS<br><br>
                                The Website, Content, Contests or Services’ content, organization, graphics, design, compilation, magnetic translation, digital conversion, software, services and other relevant matters are protected under the appropriate copyrights, trademarks and other proprietary, including, but not limited to, intellectual property, rights. Millionaire-Trader strictly forbids the user from copying, redistributing, publishing or selling of any part of the Website, Content, Contests or Services. Without written permission Millionaire-Trader forbids any systematic material retrieval from the Website, Content, Contests or Services by any automated methods or any type of data extraction or scraping that results in the creation or, directly or indirectly, of a collection, compilation, database or directory. By accessing and using the Website, Content, Contests or Services users do not acquire any ownership rights to any content, document, software, services or any other materials associated with the Website, Content, Contests or Services. If Millionaire-Trader posts any information or material on the Website, or by and through the Services, this does not constitute a waiver of any right in or to such information or materials. Millionaire-Trader’s name, log and all accompanying graphics, icons and service name are the explicit trademarks of Millionaire-Trader. With regards to all other trademarks that appear on the Website, or by or through the Services, these are the property of their respective owners. It is strictly forbidden to use any trademark without the applicable owner’s explicit written consent.<br><br><br>
                                HYPERLINKING and "FRAMING"<br><br>
                                Millionaire-Trader forbids hyperlinking the Website, or portions thereof, including but not limited to logotypes, trademarks, branding or copyrighted material, to the website or a web venue. Additionally, Millionaire-Trader strictly forbids the framing of the website, or referencing the Website’s Uniform Resource locator (“URL”) in any commercial or non-commercial media without prior written permission. You agree to cooperate with the Website in removing any content or ceasing such activity as applicable. You also hereby acknowledge that you are liable for any and all damages stemming from the aforementioned activities.<br><br><br>
                                MODIFICATION<br><br>
                                Millionaire-Trader, in our sole discretion, reserve the right to edit, modify or delete any information, documents or any other content appearing on the Website.<br><br><br>
                                DISCLAIMER<br><br>
                                ANY PRODUCTS OR SERVICES APPLIED FOR THROUGH THE WEBSITE ALONG WITH ANY CONTENT, SERVICES, CONTESTS OR THIRD PARTY PRODUCTS YOU MAY RECEIVE FROM ONE OF MILLIONAIRE-TRADER’S THIRD PARTY PROVIDERS ARE PROVIDED YOU “AS IS” AND “AS AVAILABLE”. WE DISCLAIM ANY AND ALL WARRANTIES EITHER EXPRESS OR IMPLIED TO THE FULLEST EXTENT PERMISSIBLE ACCORDING TO THE APPLICABLE LAW, WHICH INCLUDES BUT IS NOT LIMITED TO THE NON-INFRINGEMENT OF INTELLECTUAL PROPERTY, FITNESS FOR A SPECIFIC PURPOSE AND ANY WARRANTIES OF MERCHANTABILITY.<br><br>
                                MILLIONAIRE-TRADER MAKES NO WARRANTY THAT ANY OF THE PRODUCTS OR SERVICES YOU REQUEST OR THE WEBSITE, SERVICES, CONTESTS, CONTENT, OR ANY THIRD PARTY PRODUCTS FROM THIRD PARTY PROVIDERS WILL MEET YOUR REQUIREMENTS, BE TIMELY, SECURE, OR UNINTERRUPTED. FURTHERMORE THERE IS ALSO NO WARRANTY THAT THE AFOREMENTIONED WILL NOT INCLUDE BUGS, ERRORS, PROBLEMS OR OTHER LIMITATIONS OR THAT THE RESULTS ATTAINED FROM USING THE AFOREMENTIONED WILL BE ACCURATE OR RELIABLE. MILLIONAIRE-TRADER ALSO MAKES NO WARRANTY THAT YOU WILL QUALIFY FOR THE SERVICES OR CONTESTS ON OFFER.  SIMILARLY MILLIONAIRE-TRADER IS NOT LIABLE FOR THE AVAILABILITY OF THE UNDERLYING INTERNET CONNECTION ACCOMPANYING THE WEBSITE. NO ADVICE OR INFORMATION, EITHER WRITTEN OR ORAL, GAINED FROM MILLIONAIRE-TRADER, ITS WEBSITE OR ANY OF ITS THIRD PARTY PROVIDERS GRANTS ANY FURTHER WARRANTY, WHICH IS NOT CLEARLY STATED IN THIS AGREEMENT.<br><br><br>
                                DOWNLOAD DISCLAIMER<br><br>
                                Millionaire-Trader extends no warranties that any downloading activity associated with the website is free from corrupting computer codes, including but not limited to, viruses and worms. Any information downloaded from the Website is done so at a visitor’s own risk.<br><br><br>
                                LIMITATION OF LIABILITY<br><br>
                                ANY DAMAGES; DIRECT, INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL OR EXEMPLARY INCLUDING, BUT NOT LIMITED TO, DAMAGES FOR LOSS OF PROFITS, GOODWILL, USE, DATA OR OTHER INTANGIBLE, OCCURRING TO YOU OR A THIRD PARTY ARE NOT THE LIABILITIES OF  MILLIONAIRE-TRADER TO THE FULLEST EXTENT PERMISSIBLE BY LAW. SPECIFICALLY WHEN YOU USE OR ARE UNABLE TO USE PRODUCTS OR SERVICES APPLIED FOR THROUGH THE WEBSITE, OR WITH THE WEBSITE, SERVICES, CONTESTS, CONTENT, AND FOR ANY THIRD PARTY PRODUCTS YOU RECEIVE FROM ONE OF OUR THIRD PARTY PROVIDERS. THIS ALSO APPLIES TO THE COST OF SUBSTITUTE GOODS AND SERVICES PROCUREMENT THAT OCCUR WHEN ANY GOODS, DATA OR INFORMATION OR SERVICES BOUGHT OR RECEIVED FROM THE WEBSITE OR TRANSACTIONS ENTERED THROUGH THE WEBSITE. SIMILARLY APPLICABLE IS IF YOU FAIL TO QUALIFY FOR CONTEST, SERVICES OR THIRD PARTY PRODUCTS FROM ONE OF OUR THIRD PARTY PROVIDERS, OR IF ANY CONSEQUENT DENIAL OF THIRD PARTY PRODUCTS. THE LIABILITY ALSO HOLDS WHEN YOUR DATA REGISTRATION IS ALTERED OR ACCESSED WITHOUT AUTHORIZATION.  FURTHERMORE THERE CAN BE NO LIABILITY FOR THE AFOREMENTIONED DAMAGES WITH ANY OTHER MATTERS THAT RELATE TO INABILITY TO USE THE WEBSITE, SERVICES, CONTESTS, CONTENT, OR ANY THIRD PARTY PRODUCTS THAT YOU MAY RECEIVE FROM ONE OF OUR THIRD PARTY PROVIDERS. THIS ALSO COVERS ANY PRODUCTS OR SERVICES THAT YOU MAY APPLY FOR THROUGH THE WEBSITE. APPLICABLE TO THIS LIMITATION ARE ALL CAUSES OF ACTION, IN ENTIRETY INCLUDING BUT NOT LIMITED TO, BREACH OF WARRANTY, BREACH OF CONTRACT, STRICT LIABILITY, NEGLIGENCE, MISREPRESENTATION AND ANY AND ALL OTHER WRONGFUL ACTS. WITHOUT SUCH LIMITATIONS THE PRODUCTS OR SERVICES YOU APPLY FOR THROUGH THE WEBSITE, OR THE WEBSITE, SERVICES, CONTESTS, CONTENT, AND ANY THIRD PARTY PRODUCTS FROM ONE OF OUR THIRD PARTY PROVIDERS WOULD NOT BE PROVIDED TO YOU. MILLIONAIRE-TRADER AND ALL ITS THIRD PARTY PROVIDERS ARE HEREBY RELEASED BY YOU FROM ANY AND ALL LIABILITIES, OBLIGATIONS AND CLAIMS IN EXCESSES OF THE LIMITATIONS STATED ABOVE.<br><br><br>
                                INDEMNIFICATION<br><br>
                                In the situation where you use the Website, Services, Content or enter any Contest, you breach the agreement, or violate any of the rights of another individual or entity, which could result in any claims being laid, expenses including reasonable attorneys’ fees, damages, suits, costs, demands or judgments whatsoever, made by any third party, you the user agree to indemnify Millionaire-Trader, along with each of their parents, subsidiaries and affiliates, and each of their respective members, officers, directors, employees, agents, co-branders or other partners,  and hold Millionaire-Trader harmless.  The stipulations outlined in this paragraph are for the benefit of Millionaire-Trader, along with each of their parents, subsidiaries or affiliates, and each of their respective officers, directors, members, employees, agents, shareholders, licensors, suppliers and attorneys. Moreover each of these individuals and entities retain the right to assert and enforce the aforementioned provisions directly against users on their own behalves.<br><br><br>
                                THIRD PARTY WEBSITES<br><br>
                                Users of the Website may be referred to other Internet websites, or be provided links to resources, that are owned and operated by Third Party Providers. Millionaire-Trader has no jurisdiction over third party websites and resources and thus you as a user must hereby acknowledge that Millionaire-Trader is not responsible for the availability of any third party websites or resources. Millionaire-Trader does not endorse nor can be held responsible or liable for any of the terms and conditions, content, privacy policies, advertising, services, products, and other materials made accessible by any third party websites or resources, nor can Millionaire-Trader be held liable for any losses or damages arising therefrom.<br><br><br>
                                PRIVACY POLICY<br><br>
                                Using the Website, along with the associated comments, feedback information, Registration Data and any materials a user submits through or in association with the Website, is subject to Millionaire-Trader’s privacy policy. In accordance with the terms of our Privacy Policy, Millionaire-Trader reserves the right to employ all information relating to your use of the Website along with all other personally identifiable information that you provided Millionaire-Trader.<br><br><br>
                                LEGAL WARNING<br><br>
                                An individual, whether a Millionaire-Trader customer or not, who attempts or succeeds in damaging, destroying, vandalizing or tampering with the Website’s operation is violating both criminal and civil law. Any offending individual or entity will be diligently pursued by Millionaire-Trader to the fullest extent permissible by law and in equity.<br><br><br>
                                CONTACT US<br><br>
                                If at any stage you have questions about the agreement, or would like to find out more details about it from us, kindly contact us at: <a href="mailto:support@millionairetrader.net">support@millionairetrader.net</a>.

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earn Modal -->
                <div class="modal fade" id="EarnModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Further Reminder - Earnings Disclaimer</h4>
                            </div>
                            <div class="modal-body">
                                Upon your request verifications of any claims put forward of actual earnings or examples of actual results can be made. A user’s success level in achieving outcomes outlined in our materials is dependent on a variety of factors including but not limited to the time an individual devotes to the program, your personal finances, techniques and ideas pertained to in your finances, your specific knowledge and various skills. Owing to the fact that these factors differ among individuals, Millionaire-Trader cannot guarantee a user’s success, nor does Millionaire-Trader hold responsibility for your choice of actions. We advise all users to seek counsel from a professional financial, accounting, legal or tax advisor.<br><br>
                                If you fail to approach a professional advisor, who can offer customized financial guidance before you act this could lead to your acting contrary to your best interests and result in loss of capital. Millionaire-Trader has extended every effort into representing this product and its potential accurately. Despite the opportunity this product offers for personal control over one’s earning terms, there are no guarantees that a user will earn money using the techniques and ideas outline in Millionaire-Trader’s Website materials.<br><br>
                                Any and all forward looking statements included here in any of Millionaire-Trader’s associated sales materials are solely intended to convey an opinion of earnings potential. Furthermore examples cited in the materials are not to be considered as a promise or guarantee of returns. There are certain limitations to hypothetical or simulated performance results. Simulated results do not represent actual trading and are distinct from actual performance records. Because the trades have not been executed, for impact purposes the results may appear under-compensated or over-compensated for potential market inadequacies. It is also important to note that simulated trading programs are designed with benefit of hindsight.<br><br>
                                Millionaire-Trader reiterates that earning potential is determined by the individual using the products, ideas, techniques and effort invested.  Millionaire-Trader does not claim its products or services are a “get rich scheme”, and emphasizes that it should not be regarded as such. No promises or guarantees can be made to a user that your result will match the ones outlined by us or anybody else’s results. With any commercial opportunity, success resulting in money being made is contingent on hard work, time and a variety of external factors. Millionaire-Trader makes no express or implied guarantees of income.<br><br><br>
                                Policy revisions<br><br>
                                The website and Millionaire-Trader, by the manner of updating this posting, reserves the right to modify, amend or revise this policy, the Terms of Service agreement, other policies and agreements, in any manner and at any time.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Privacy Modal -->
                <div class="modal fade" id="PrivacyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Privacy Policy</h4>
                            </div>
                            <div class="modal-body">
                                The pressing of continue, grants Millionaire-Trader permission to send emails regarding the company’s offers. At any time you may opt out of receiving more emails and can select that option at the bottom of each email.<br><br>
                                The privacy of any individual who visits Millionaire-Trader’s websites is thoroughly respected. This privacy statement outlines the manner in which information is collected and how information may be used. This statement also presents the lengths which Millionaire-Trader goes to in order to protect the privacy of the information volunteered by visitors to sites on the internet, owned and operated by Millionaire-Trader. From time to time Millionaire-Trader may revise this policy and it is recommended that you continually review this information for these purposes.<br><br><br>
                                1) Personally identifiable information<br><br>
                                Normally Millionaire-Trader attains specific information regarding its website traffic and visitors from information given voluntarily. Examples include purchase or enroll for services, customer support tickets, resume submissions, or when emails are sent to us. Additionally specific activities require that information is provided. This may include the times users purchase a service, use a credit card for payment of services, resume submission, or for information requests. When such personally identifiable information is provided to Millionaire-Trader through one of Millionaire-Trader’s websites, it will be used for a specific request. In most situations the user will be able to be given the decision as to whether they want this information used for added purposes. Alternatively users may opt out of this information being used via email correspondence, however please be aware that Millionaire-Trader reserves its right, in its own discretion, to send bulletins and information about its services. Without specific instructions from users Millionaire-Trader may use this information to present users with information regarding  additional products or services available from Millionaire-Trader’s other companies and Millionaire-Trader’s authorized agents in addition to other providers of goods and services with which Millionaire-Trader has working relationships and that Millionaire-Trader believes is relevant to users.<br><br>
                                Unless authorized, required by law or due to imminent physical harm to the visitor or others, Millionaire-Trader will not sell or trade users’ personally-identifiable information. In cases where users provide Millionaire-Trader with credit card or other order related information online, Millionaire-Trader employs protective measures by use of commercially customary web-based security and encryption protocols including Secure Socket Layer (SSL) and Secure Electronic Transaction (SET). In cases where information is voluntarily provided including any data, feedback, comments, questions, answers, suggestions or the like, Millionaire-Trader regards this information as non-confidential and nonproprietary, and unless otherwise state in this privacy policy, Millionaire-Trader  is not obligated to act in an effort to protect such information from being disclosed.<br><br><br>
                                2) Non-personal information<br><br>
                                In practice some generic information is gathered by Millionaire-Trader automatically. Generic information can be defined as information that does not expose the identity of a user or visitor. This can include information regarding the internet address assigned to a computer, the number and frequency of visitors and the domains visited. This information is gathered for the limited purpose of ascertaining website needs and customer services. This is achieved by use of specific technology, including cookies, a practice that provides users with customized information about Services offered by Millionaire-Trader. Information collected thusly is not combined with any personally identifiable data by Millionaire-Trader. Visitors may opt to set their browsers to notify when cookies are received and choose to refuse their utilization.<br><br><br>
                                3) hosted websites, server, bulletin boards, forum, Third-Party Sites<br><br>
                                Any information that users elect to disclose in any public space, including chat rooms, websites or bulletin boards hosted by Millionaire-Trader as part of their services, will be  accessible to anyone who visits such spaces. Pertaining to the aforementioned spaces, any information disclosed in these locations cannot be safeguarded by Millionaire-Trader. Similarly many of these websites include links belonging to third party sites unrelated to Millionaire-Trader. Any information disclosed to these third party sites by users cannot be protected by Millionaire-Trader and users are encouraged to read the privacy policies of such websites before using them.<br><br><br>
                                4) Exceptions and Limitations:<br><br>
                                In compliance with the applicable laws and notwithstanding the previously outlined statements, regarding any investigation pertaining to any content, including both personal or private electronic communications transmitted via Millionaire-Trader, or supposed unlawful activities of any user of the Services Millionaire-Trader cooperates fully with state officials. Millionaire-Trader also takes reasonable measures in order to protect its proprietary rights. Accordingly Millionaire-Trader may be required to disclose personally identifiable information for the limited purposes of cooperating and complying with applicable laws. For similar purposes specific areas of communications of any kind may be selected for monitoring by Millionaire-Trader to satisfy any government, regulation or law, to protect the property and rights of Millionaire-Trader or other parties and if the operation of Millionaire-Trader is dependent on such disclosure. Additionally Millionaire-Trader reserves the right to sell or transfer users’ information, which includes but is not limited to data such as names, addresses, and other information provided by users to Millionaire-Trader, to third party businesses that focus on communication products or services, who will agree to succeed the maintenance and protection of the information collected and maintained by Millionaire-Trader and abide by the obligations expressed in this privacy policy.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- AntiSpam Modal -->
                <div class="modal fade" id="AntiSpamModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Anti-Spam Policy</h4>
                            </div>
                            <div class="modal-body">
                                This policy is intended for the Millionaire-Trader websites and other services that present this display, or link to this notice, henceforth referred to as “Services”. Any Services associated with the distribution, transmission or delivery of any unsolicited bulk or commercial email is forbidden by Millionaire-Trader website. Users are not allowed to employ any Services to send spam mail and may not deliver or cause spam to be delivered to Millionaire-Trader’s customer base.<br><br>
                                Any email, or email caused to be sent through the Services cannot carry out the following acts: (a) Violate the Services’ Terms of Use agreement, (b) Contain or make use of invalid or forged headers, (c) Contain or make use of invalid or fake domain names, (d) Employ methods that fake, hide, or mask information which identifies the point of origin or the point of transmission, (e) Employ techniques of deceptive addressing, (f) Utilize the internet domain name of a third party, or relay from or through third party tools, without the third party’s permission, (g) Include in the subject line false or misleading information or have content with any false or misleading information, (h) Fail to meet the terms of any additional technical criteria mentioned below.<br><br>
                                Use of the Services is subject to Millionaire-Trader’s Terms of Use agreement and the Privacy disclaimer. The harvesting, collection or mining of email addresses and other data attained from the services is not permitted by Millionaire-Trader. Additionally Millionaire-Trader does not authorize others to use the Services in the collection or compiling of any data regarding Millionaire-Trader’s subscribers, users and customers. This includes, but is not limited to subscriber email addresses, which are the confidential and proprietary information of Millionaire-Trader.<br><br>
                                The utilization of Millionaire-Trader Services with the result that could damage, disable, overburden or injure the Services in any way, or that could result in interference with any other party’s use and enjoyment of the Services is not authorized by Millionaire-Trader.<br><br>
                                With any improper or unauthorized use of any Service that Millionaire-Trader believes is occurring, the company in its sole discretion may take action it deems appropriate without any notice. This may include the blocking of messages from specific internet domains, mail servers or IP addresses.  Any service which Millionaire-Trader, in its own discretion, concludes an account used for  transmitting or in any other way connected with an email address that violates this policy, may be result in the associated account’s immediate termination.<br><br>
                                This policy contains nothing that intends to give any right to transmit or send email to or through the Services. This policy failing to be enforced in every case does not equate to the relinquishment of Millionaire-Trader’s rights.<br><br>
                                The result of unauthorized usage of the Services connected with unsolicited email transmission may include civil, criminal or administrative punishments or penalties against the senders, and any party assisting the senders.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection

@section('extra_scripts')

            <script src="/landing-assets/millionairetrader/js/jquery.simple.timer.js"></script>
            <script src="/landing-assets/millionairetrader/js/E-v1.js"></script>

    @if(isset($settings->use_email_verification) && $settings->use_email_verification)
        <script src="/js/validate_email.js"></script>
    @endif

    @if(isset($settings->use_phone_verification) && $settings->use_phone_verification)
        <script src="/js/validate_phone.js"></script>
    @endif

@endsection

