<div class="from-group">
  {{Form::label('name','Name')}}
  {{Form::text('name',null,['class'=>'form-control'])}}
  {{Form::label('last_name', 'Last Name')}}
  {{Form::text('last_name',null,['class'=>'form-control'])}}
  {{Form::label('epithet','Epithet')}}
  {{Form::text('epithet',null,['class'=>'form-control'])}}
  {{Form::label('race','Race')}}
  {{Form::text('race',null,['class'=>'form-control'])}}
  {{Form::label('gender','Gender')}}
  {{Form::text('gender',null,['class'=>'form-control'])}}
  {{Form::label('height','Height')}}
  {{Form::text('height',null,['class'=>'form-control'])}}
  {{Form::label('age','Age')}}
  {{Form::text('age',null,['class'=>'form-control'])}}
  {{Form::label('weapons','Weapons')}}
  {{Form::text('weapons',null,['class'=>'form-control'])}}
  {{Form::label('affiliation','Affiliation')}}
  {{Form::text('affiliation',null,['class'=>'form-control'])}}
  {{Form::label('description','Description')}}
  {{Form::text('description',null,['class'=>'form-control'])}}
</div>
<div class="from-group">

  {{Form::label('avatar', 'Avatar')}}
  {{Form::file('avatar')}}
</div>