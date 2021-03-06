<?php namespace components\wizard; if(!defined('MK')) die('No direct access.'); ?>

<form class="form wizard-edit-node" action="?rest=wizard/node/${data.id}" method="{{if data.id}}PUT{{else}}POST{{/if}}">
  
  <input type="hidden" name="page_id" value="${page_id}" />

  <fieldset>
    <div class="ctrlHolder">
      <label><?php __($component, 'Answer'); ?>:</label>
      <input autofocus class="big" type="text" name="answer_title" value="${data.answer_title}" placeholder="<?php __($component, 'Example answer'); ?>." />
    </div>
    <!-- <i>Home > Bla > Voorbeeld</i> -->
  </fieldset>
  
  <fieldset>
    <legend><strong class="label label-default"><?php __($component, 'Follow up'); ?></strong></legend>
    <p><i><?php __($component, 'When this answer is clicked'); ?>:</i></p>
  </fieldset>
  
  <fieldset class="option-based question">
    <legend class="label label-info"><?php echo transf($component, 'Option {0}', '1'); ?></legend>
    <label class="option"><input type="radio" name="option" value="question" /> <?php __($component, 'Show another question'); ?>.</label>
    <div class="ctrlHolder">
      <label><?php __($component, 'Question'); ?>:</label>
      <input class="big" type="text" name="question_title" value="${data.question_title}" placeholder="<?php __($component, 'Example question'); ?>?" />
    </div>
  </fieldset>
  
  <fieldset class="option-based url">
    <legend class="label label-info"><?php echo transf($component, 'Option {0}', '2'); ?></legend>
    <label class="option"><input type="radio" name="option" value="url" /> <?php __($component, 'Go to an URL'); ?>.</label>
    <div class="ctrlHolder">
      <label><?php __($component, 'URL'); ?>:</label>
      <input class="big" type="text" name="url" value="${data.url}" placeholder="http://www.example.com/" />
    </div>
    <img class="url-preview" height="150">
    <div class="ctrlHolder">
      <label><?php __($component, 'Open in'); ?>:</label>
      <select name="url_target">
        <option value="" {{if data.url_target == ''}}checked="checked"{{/if}}><?php __($component, 'Same window'); ?></option>
        <option value="_blank" {{if data.url_target == '_blank'}}checked="checked"{{/if}}><?php __($component, 'New window'); ?></option>
      </select>
    </div>
  </fieldset>

  <div class="buttonHolder">
    {{if data.id}}<input type="button" data-id="${data.id}" class="button delete-node" value="<?php __($component, 'Delete'); ?>" />{{/if}}
    <input type="submit" value="<?php __($component, 'Save this entry'); ?>" class="button black" />
  </div>
  
</form>

