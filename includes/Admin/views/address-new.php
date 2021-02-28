<div class="wrap">
	<h1><?php _e('New Address', 'softechlove'); ?></h1>
	<form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="name"><?php _e( 'Name', 'softechlove' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="name" id="name" class="regular-text" value="">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="address"><?php _e( 'Address', 'softechlove' ); ?></label>
                    </th>
                    <td>
                        <textarea class="regular-text" name="address" id="address"></textarea>
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="phone"><?php _e( 'Phone', 'softechlove' ); ?></label>
                    </th>
                    <td>
                        <input type="text" name="phone" id="phone" class="regular-text" value="">
                    </td>
                </tr>
            </tbody>
        </table>

        <?php wp_nonce_field( 'new-address' ); ?>
        <?php submit_button( __( 'Add Address', 'softechlove' ), 'primary', 'submit_address' ); ?>
    </form>
</div>