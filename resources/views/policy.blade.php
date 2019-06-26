@extends('layouts.main')

@section('content')

    <main class="content">
        <div class="hero">
            <div class="header">
                <div class="topbar"><a class="w-inline-block" href="http://notemask.com" title="Home"><img class="logo-desktop" src="http://notemask.com/img/notemask-logo.svg" alt=""/><img class="logo-mobile" src="http://notemask.com/img/notemask-logo-mobile.svg" alt=""/></a>
                    <div class="lang-selector">
                        <div class="select language">
                            <select id="language" name="self-desctucts">
                                <option value="en"  selected  >English</option>
                                <option value="ru"  >Russian</option>
                                <option value="lv"  >Latvian</option>
                            </select>
                        </div>
                    </div>
                </div>            <div class="main-h1-block">
                    <h1 class="heading">Privacy Policy</h1>
                </div>
            </div>
            <div class="note-input">
                <div class="main-input">
                    <!-- policy_container -->
                    <div class="policy_container">
                        <p>Last modified: June 19, 2019</p>
                        <p>At Notemask, privacy is taken very seriously, since the main purpose of the site is to preserve it. This policy outlines the measures taken by Notemask to protect the privacy of its users.</p>
                        <h3>1. Service description</h3>
                        <p>Notemask is a free web based service that allows users to create encrypted notes that they can share over the internet as unique one-time-use HTTPS URLs (hereafter referred to as links) which by default expire after its first access via any web browser.
                            <br>
                            <br>As Notemask does not provide any means for transmitting the link, the act of sending the link is the full responsibility of Notemask users.
                            <br>
                            <br>Depending on the communication channel of your choice (e.g., e-mail, fax, SMS, phone, instant messaging, social media), there may be a certain risk that third parties intercept your communication, get knowledge of the communicated link and thus may be able to read your note.</p>
                        <h3>2. How the notes and its contents are processed</h3>
                        <p>The link is generated in the user's browser and at no time is sent as such to Notemask. The link is thus in the sender's (and later possibly in the recipient's) hands only. Therefore, there is no way to recover a note if a Notemask user losses the link.
                            <br>
                            <br>Since only the link binds the decryption key to the note's content and since Notemask does not have the link, at no time is any note held in any readable format state at Notemask. This assures that nobody (including Notemask's administrators) can read a note.
                            <br>
                            <br>When using Notemask's default funtionality, when a note is retrieved, its data is completely removed from Notemask; there is absolutely no way to recover it again.
                            <br>
                            <br>When "Show options" is selected and the user opts for a time interval for the note's removal, then independently of how many times the note is retrieved, the note will be deleted only after that specified time is completed.
                            <br>
                            <br>After a note is deleted from Notemask, there is absolutely no way to recover it again.
                            <br>
                            <br>When a note is not retrieved after 30 days, Notemask removes it permanently, just as if it were read. The Notemask sysadmin team will do as much as possible to protect the site against unauthorized access, modification or destruction of the data. But, even if someone or something could manage to gain access to the database, they would be unable to read the notes since their contents are encrypted and can't be decrypted without the links which Notemask never has a hold of.</p>
                        <h3>3. Processing of IP addresses</h3>
                        <p>Notemask is not logging the IP addresses; they are processed to enable communication with Notemask's servers but they are not part of the log-files. IP addresses are deleted as soon as they are no longer needed for the purpose of communication.</p>
                        <h3>4. Pseudonymous data</h3>
                        <p>The creator of the note can introduce personal data into the note. Even though this data is encrypted, the data can be decrypted again and thus constitutes pseudonymous (personal) data. In any case, one cannot deduce the note's creator from Notemask's database, as Notemask does not store IP addresses.
                            <br>
                            <br>The decryption of the note's data is in the users' hands (sender and recipient). Notemask is not able to decrypt the note and access the data (personal or otherwise) introduced by the creator since Notemask is never in possession of the decryption key which is contained only in the link.</p>
                        <h3>5. Disclaimer</h3>
                        <p>When a person clicks the Notemask's link, Notemask declines any responsibility related to the note's content.</p>
                        <h3>6. Disclosure of Data to Third Party</h3>
                        <p>Notemask does not share nor sell any information to others, nor use it in any way not mentioned in this Privacy Policy.</p>
                        <h3>7. Use of cookies</h3>
                        <p>Notemask uses cookies (small text files that are stored on your computer by your browser when you visit a website) for our own interest in improving the use of our site and service. In some cases they will also be used for promotional purposes. The type of cookies Notemask uses are listed below:
                            <br>
                            <br>Functional cookies
                            <br>
                            <br>Notemask uses persistent cookies to keep a session in the user's preferred language and to record your notification that Notemask uses cookies as explained in this section. Also some cookies are used as part of the link hiding mechanism when reading a note, these cookies in particular must be enabled for Notemask to function and are deleted immediately after the note is retrieved.
                            <br>
                            <br>Non-functional cookies
                            <br>
                            <br>Used for commercial and promotional purposes. Non-functional cookies are placed by third parties. In case of European citizens, these cookies do not store personal data (non-personalized ads).
                            <br>
                            <br>If you would want to remove certain cookies, or block them from being stored in your browser, it is possible via your browser settings for cookies. However, if you do this, the site might not work as expected.</p>
                        <h3>8. Children</h3>
                        <p>Notemask does not target and is not intended to attract children under the age of 16. Minors must obtain express consent from their parents or legal guardians prior to accessing or using Notemask.</p>
                        <h3>9. Validity of this Privacy Policy</h3>
                        <p>Please note that this Privacy Policy may change from time to time. We expect most changes to be minor. Regardless, we will post any Policy changes on this page, and if the changes are significant, we will provide a more prominent notice such as a message on the home page. Each version of this Policy will be identified at the top of the page by its effective date.</p>
                        <h3>10. Contact information</h3>
                        <p>If you have any questions about this Privacy Policy or other concerns regarding privacy issues, please send us an e-mail at info@notemask.com and we will answer you in less than 5 working days. If you are not satisfied with the outcome of our communication, you may refer your complaint to a local supervisor authority.</p>
                    </div>
                    <!-- policy_container - end -->
                </div>
            </div>
        </div>
    </main>

@endsection