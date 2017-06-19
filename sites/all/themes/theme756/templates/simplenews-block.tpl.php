<?php if (isset($pss_message)): ?>
  <div class="pss-title-wrapper">
      <p class="pss-title"><?php print $pss_message; ?></p>
  </div>
<?php elseif ($message): ?>
<p><?php print $message; ?></p>
<?php endif; ?>

<?php if (isset($pss_body_message)): ?>
<div class="pss-message-wrapper">
    <p class="pss-message"><?php print $pss_body_message; ?></p>
</div>
<?php endif; ?>

<?php if ($use_form): ?>
<?php print render($form); ?>
<?php elseif ($subscription_link): ?>
<p><?php print $subscription_link; ?></p>
<?php endif; ?>
