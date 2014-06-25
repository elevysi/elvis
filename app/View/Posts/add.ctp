<?php echo $this->Form->create('Post', array('class' => 'form-horizontal')); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
		<div class="form-group"><?php echo $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title')); ?></div>
		<div class="form-group"><?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Post')); ?></div>
	</fieldset>
<?php echo $this->Form->submit(__('SAVE'), array('class' => 'btn btn-primary')); ?>

<script type="text/javascript">

tinymce.init({
    selector: "textarea",
    theme: "modern",
    width: '100%',
    height: 300,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>





    






