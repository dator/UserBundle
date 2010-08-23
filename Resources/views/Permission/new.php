<?php $view->extend('DoctrineUserBundle::layout') ?>

<?php echo $form->getRawValue()->renderFormTag($view['router']->generate('doctrine_user_permission_create'), array('class' => 'doctrine_user_permission_new')) ?>
    
    <?php echo $form->getRawValue()->renderErrors() ?>

    <?php echo $form->getRawValue()->renderHiddenFields() ?>

    <div>
        <label for="<?php $form['name']->getId() ?>">Name:</label>
        <?php echo $form['name']->getRawValue()->render(); ?>
        <?php echo $form['name']->getRawValue()->renderErrors() ?>
    </div>
    <div>
        <label for="<?php echo $form['description']->getId() ?>">Description:</label>
        <?php echo $form['description']->getRawValue()->render(); ?>
        <?php echo $form['description']->getRawValue()->renderErrors() ?>
    </div>
    <div>
        <input type="submit" value="Create permission" />
    </div>
</form>