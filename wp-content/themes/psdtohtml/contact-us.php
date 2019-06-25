<?php
/**
 * Template Name: Contact Us Template
 */
?>
<?php get_header(); ?>
            <section role="main">
                <h2 class="main-title"><?php the_title(); ?></h2>
                <div id="main">
                    <form name="contact" method="post" action="https://www.psd2html.com/contact-us.html"
                          novalidate="novalidate" id="contact" class="contact-us js-validation">
                        <fieldset>
                            <div class="details">
                                <div class="row">
                                    <div class="cell2 required name">
                                        <label for="contact_user_name">Name</label>
                                        <input type="text" id="contact_user_name" name="contact[user][name]"
                                               class="errorEvents">
                                    </div>
                                    <div class="cell2 required email">
                                        <label for="contact_user_email" class="required">Email</label>
                                        <input type="email" id="contact_user_email" name="contact[user][email]"
                                               required="required" data-validators="required validate-email-cno"
                                               class="errorEvents">
                                    </div>
                                </div>
                                <div class="required drop-area">
                                    <label for="contact_message" class="required">Message</label>
                                    <div class="section">
                                        <div class="textarea-box">
                                        <textarea id="contact_message" name="contact[message]" required="required"
                                                  data-validators="required" class="resizable errorEvents" rows="10"
                                                  cols="30" data-resize-handler=".resize"></textarea>
                                            <span class="resize">resize</span>
                                            <ul class="attach-list"></ul>
                                            <div class="link-box hidden">
                                                <div class="txt-holder"><input type="text" data-default-value="http://">
                                                </div>
                                                <a href="https://www.psd2html.com/contact-us.html#" class="btn">ok</a>
                                            </div>
                                        </div>
                                        <div class="file">
                                            <span class="file-btn" id="contact-choose-file">open</span>
                                            <input type="hidden" id="contact-attach-file" name="contact[attachment]"
                                                   data-validators="validate-uploader" data-error-class="wait-file"
                                                   class="hidden file-btn errorEvents" data-file-list="">
                                            <ul class="file-bar">
                                                <li><span style="position: relative; display: inline-block;"><a
                                                                href="https://www.psd2html.com/contact-us.html#">Browse</a><input
                                                                type="file" size="1" multiple=""
                                                                style="visibility: hidden; position: absolute; top: 5px; left: 10px; width: 40px; height: 10px; border: 0px; cursor: pointer; opacity: 0.0001;"></span>
                                                </li>
                                                <li><a href="https://www.psd2html.com/contact-us.html#">Link</a></li>
                                                <li><a href="https://www.psd2html.com/contact-us.html#">Dropbox</a></li>
                                                <li><span class="drag-drop">drop files here</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="check-area check-area-terms">
                                    <input type="checkbox" id="contact_termsConditions" name="contact[termsConditions]"
                                           required="required" data-validators="validate-one-required" value="1"
                                           class="errorEvents">
                                    <label for="contact_termsConditions" class="nice-chk"></label>
                                    <span class="txt">I accept the <a
                                                href="https://www.psd2html.com/terms-and-conditions.html" rel="external"
                                                target="_blank">Terms and Conditions</a>.</span>
                                </div>
                                <div class="check-area check-area-privacy">
                                    <input type="checkbox" id="contact_privacyPolicy" name="contact[privacyPolicy]"
                                           required="required" data-validators="validate-one-required" value="1"
                                           class="errorEvents">
                                    <label for="contact_privacyPolicy" class="nice-chk"></label>
                                    <span class="txt">I consent to processing of my personal data and accept <a
                                                href="https://www.psd2html.com/privacy-policy.html" rel="external"
                                                target="_blank">Privacy Policy</a>.</span>
                                </div>
                            </div>
                            <address class="contacts">
                                <strong class="title">QUESTIONS? CONCERNS?</strong>
                                <a class="chat chat-link chat-online" href="https://www.psd2html.com/chat.html">Live
                                    chat</a>
                                <span>888.724.9414</span>
                                <span class="addr">201 Spear Street, Suite 1100, San Francisco, CA 94105</span>
                            </address>
                            <input id="contact-submit" type="submit" value="submit" class="btn errorEvents">
                            <input type="hidden" id="contact_token" name="contact[token]"
                                   value="RPBerO4KPksUzxi9QACtkxvhiF2vxD0yi_vu4E76IFs" class="errorEvents">
                            <input type="hidden" id="contact-gmt-offset" name="contact[user][gmt_offset]" value="120"
                                   class="errorEvents">
                        </fieldset>
                        <input type="hidden" id="contact_gmt_offset" name="contact[gmt_offset]" value="0"
                               class="errorEvents">
                    </form>
                </div>
            </section>
<?php get_footer(); ?>