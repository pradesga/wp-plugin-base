<td width="10"></td>
<td width="400">
	<div class="postbox " id="linksubmitdiv"> 
	<div class="inside">
		<div id="submitlink" class="submitbox"> <h3 style="cursor: default;">Support <?php echo WPB_PLUGIN_NAME;?></h3>
			<div id="minor-publishing"> 
				<?php
				$credits = $this->_credits;
				?>

				<div class="inside"><div class="intro"><p><strong>If you enjoyed, please support this plugin:</strong></p></div>
				
				<p>
						<a href="http://wordpress.org/extend/plugins/<?php echo WPB_SLUG;?>/">Rate the plugin 5★ on WordPress.org</a>
				</p>
				<p>Or even better invite me a coffee :</p>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="margin-bottom:-20px;">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="3ZMTRLTEXQ9UW">
						<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
						<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
						</form>
		
				
			</div>

			<div id="major-publishing-actions"> 
				<div id="publishing-action">
					<input type="submit" value="<?php _e('Save Settings','wsi');?>" class="button-large button-primary" name="save">
				</div>
				<div class="clear"></div>
			</div> 
		</div>
	</div>
</div>
 
</td>

</tr>
</tbody>
</table>
</div><!--wsl_admin_tab_content-->