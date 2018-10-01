<?php

if (!defined('ABSPATH')) die('No direct access.');

// N.B. This just turns off the UI. It's still there internally (e.g. AJAX commands)
if (defined('UPDRAFTPLUS_TEMPORARY_CLONE') && !UPDRAFTPLUS_TEMPORARY_CLONE) return;

?>

<h2><?php _e('Create a temporary clone on our servers (UpdraftClone)', 'updraftplus'); ?></h2>

<div class="postbox updraftplus-clone">

	<div class="updraft_migrate_widget_module_content">
		<header>
			<h3><span class="dashicons dashicons-admin-page"></span>UpdraftClone</h3>
			<button class="button button-link updraft_migrate_widget_temporary_clone_show_stage0"><span class="dashicons dashicons-info"></span></button>
		</header>
		<div class="updraft_migrate_widget_temporary_clone_stage0">
			<p>
				<?php
					echo __("A temporary clone is an instant copy of this website, running on our servers. Rather than test  things on your live site, you can UpdraftClone it, and then throw away your clone when done.", 'updraftplus').' <a target="_blank" href="https://updraftplus.com/updraftclone/">'.__('Find out more here.', 'updraftplus').'</a> <a target="_blank" href="https://updraftplus.com/faq-category/updraftclone/">'.__('Read FAQs here.', 'updraftplus').'</a> <a target="_blank" href="'.$updraftplus->get_url('buy-tokens').'">'.__("You can buy UpdraftClone tokens from our shop, here.", 'updraftplus').'</a>';
				?>
				<ul style="list-style: disc inside;">
					<li><strong><?php _e('Easy', 'updraftplus');?>:</strong> <?php _e('Press the buttons... UpdraftClone does the work.', 'updraftplus');?></li>
					<li><strong><?php _e('Reliable', 'updraftplus');?>:</strong> <?php _e('Runs on capacity from a leading cloud computing provider.', 'updraftplus');?></li>
					<li><strong><?php _e('Secure', 'updraftplus');?>:</strong> <?php _e('One VPS (Virtual Private Server) per clone, shared with nobody.', 'updraftplus');?></li>
					<li><strong><?php _e('Fast', 'updraftplus');?>:</strong> <?php _e('Takes just the time needed to create a backup and send it.', 'updraftplus');?></li>
					<li><strong><?php _e('Flexible', 'updraftplus');?>:</strong> <?php _e('If you want, test upgrading to a different PHP or WP version.', 'updraftplus');?></li>
				</ul>
			</p>
		
			<?php if (is_multisite()) { ?>
				<p><?php echo '<a target="_blank" href="https://updraftplus.com/faqs/how-do-i-migrate-to-a-new-site-location/">'.__('Temporary clones of WordPress multisite installations are not yet supported. See our documentation on how to carry out a normal migration here', 'updraftplus').'.</a>'; ?></p>
			<?php } else { ?>
				<button class="button button-primary button-hero updraftclone_show_step_1"><span class="dashicons dashicons-admin-page"></span><?php _e("Create a temporary clone on our servers (UpdraftClone)", "updraftplus");?></button>
				<p>
					<small><?php echo __("To create a temporary clone you need credit in your account.", "updraftplus"); ?> <a target="_blank" href="<?php echo $updraftplus->get_url('buy-tokens'); ?>"><?php _e("You can buy UpdraftClone tokens from our shop, here.", "updraftplus"); ?></a></small>
				</p>
			<?php } ?>
		</div>
		<div class="updraft_migrate_widget_temporary_clone_stage1" style="display: none;">
			<p>
				<?php echo __("To create a temporary clone you need: 1) credit in your account and 2) to connect to your account, below.", "updraftplus"); ?> <a target="_blank" href="<?php echo $updraftplus->get_url('buy-tokens'); ?>"><?php _e("You can buy UpdraftClone tokens from our shop, here.", "updraftplus"); ?></a>
			</p>
			<?php $updraftplus_admin->build_credentials_form('temporary_clone', true, false, array('under_username' => __('Not got an account? Get one by buying some tokens here.', 'updraftplus'), 'under_username_link' => $updraftplus->get_url('buy-tokens'), 'terms_and_conditions' => __('I accept the UpdraftClone terms and conditions', 'updraftplus'), 'terms_and_conditions_link' => 'https://updraftplus.com/faqs/what-are-the-updraftclone-terms-and-conditions/')); ?>
		</div>
		<div class="updraft_migrate_widget_temporary_clone_stage2" style="display: none;"></div>
		<div class="updraft_migrate_widget_temporary_clone_stage3" style="display: none;"></div>
	</div>
</div>
