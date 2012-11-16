<div>
  <div class="form-item" id="edit-name-wrapper">
    <label for="edit-name">Username or e-mail: <span class="form-required" title="This field is required.">*</span></label>
    <input maxlength="60" name="name" id="edit-name" size="15" value="" tabindex="1" class="form-text required" type="text">
  </div>
  <div class="form-item" id="edit-pass-wrapper">
    <label for="edit-pass">Password: <span class="form-required" title="This field is required.">*</span></label>
    <input name="pass" id="edit-pass" maxlength="60" size="15" tabindex="2" class="form-text required" type="password">
  </div>
  <input name="op" id="edit-submit" value="<?php print $form['submit']['#value'];?>" tabindex="3" class="form-submit" type="submit">
  <div class="item-list">
    <ul>
      <li class="last"><a href="/user/password" title="Request new password via e-mail.">Request new password</a>
</li>
    </ul>
  </div>
  <input name="form_build_id" id="<?php print $form['form_build_id']['#id']; ?>" value="<?php print $form['form_build_id']['#value']; ?>" type="hidden">
  <input name="form_id" id="edit-user-login-block" value="user_login_block" type="hidden">
</div>
