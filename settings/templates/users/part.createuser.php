<div class="app-navigation-new">
	<button type="button" class="icon-add"><?php p($l->t('New user'))?></button>
	<form class="newUserMenu popovermenu menu-left" id="newuser" autocomplete="off">
		<ul>
			<li>
				<label class="icon-user" for="newusername">
					<input id="newusername" type="text" required
						placeholder="<?php p($l->t('Username'))?>"
						autocomplete="off" autocapitalize="none" autocorrect="off" />
				</label>
			</li>
			<li>
				<label class="icon-password" for="newuserpassword">
					<input id="newuserpassword" type="password" required
						   placeholder="<?php p($l->t('Password'))?>"
						   autocomplete="off" autocapitalize="none" autocorrect="off" />
				</label>
			</li>
			<li>
				<label class="icon-mail" for="newemail">
					<input id="newemail" type="text" style="display:none"
						   placeholder="<?php p($l->t('E-Mail'))?>"
						   autocomplete="off" autocapitalize="none" autocorrect="off" />
				</label>
			</li>
			<li>
				<label class="icon-contacts-dark groups" for="newgroup">
					<div class="groupsListContainer multiselect button" data-placeholder="<?php p($l->t('Groups'))?>"><span class="title groupsList"></span>
						<span class="icon-triangle-s"></span>
					</div>
				</label>
			</li>
			<li>
				<label class="icon-confirm" for="newsubmit">
					<input type="submit" id="newsubmit" class="button hidden" value="" />
					<span>
						<?php p($l->t('Create'))?>
					</span>
				</label>
			</li>
			<?php if((bool)$_['recoveryAdminEnabled']): ?>
			<li class="recoveryPassword">
				<input id="recoveryPassword"
					   type="password"
					   placeholder="<?php p($l->t('Admin Recovery Password'))?>"
					   title="<?php p($l->t('Enter the recovery password in order to recover the users files during password change'))?>"
					   alt="<?php p($l->t('Enter the recovery password in order to recover the users files during password change'))?>"/>
			</li>
			<?php endif; ?>
		</ul>
	</form>
</div>
