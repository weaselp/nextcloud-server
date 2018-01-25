<?php
/**
 * @copyright Copyright (c) 2018 Bjoern Schiessle <bjoern@schiessle.org>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCP\Federation;

/**
 * Interface ICloudFederationProvider
 *
 * Enable apps to create their own cloud federation provider
 *
 * @since 14.0.0
 *
 * @package OCP\Federation
 */

interface ICloudFederationProvider {

	/**
	 * send new share to another server
	 *
	 * @since 14.0.0
	 */
	public function sendShare();

	/**
	 * share received from another server
	 *
	 * @param string $shareWith with whom the item should be shared
	 * @param string $description share description (optional)
	 * @param string $providerId resource ID on the provider side
	 * @param string $owner provider specific ID of the user who shares the item
	 * @param array $protocol information needed to access the resource (e,.g. ['name' => 'webdav', 'options' => ['username' => 'john', 'permissions' => 31]])
	 *
	 * @throws Exceptions\ProviderCouldNotAddShareException
	 *
	 * @since 14.0.0
	 */
	public function shareReceived($shareWith, $description, $providerId, $owner, $protocol);

	/**
	 * unshare file and send unshare message to another server
	 *
	 * @since 14.0.0
	 *
	 */
	public function removeShare();

	/** unshare massege received from another server
	 *
	 * @since 14.0.0
	 */
	public function shareRemoved();

	/**
	 * send notification to another server
	 *
	 * @since 14.0.0
	 */
	public function sendNotification();

	/**
	 * notification received from another server
	 *
	 * @since 14.0.0
	 */
	public function notificationReceived();

}
