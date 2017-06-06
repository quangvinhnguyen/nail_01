
  @extends('admin.master')

   @section('content')
   
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add new </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        {{ Form::open([
                            'class' => 'form-horizontal form-label-left',
                            'novalidate' => true,
                            'action' => 'Admin\ProductsController@store',
                            'id' => 'fileupload',
                              'method' => 'POST',
                              'enctype' => 'multipart/form-data',
                        ]) }}
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">name <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{ Form::text('name',null,[
                                  'class' => 'form-control col-md-7 col-xs-12',
                                  'data-validate-length-range'=>'6',
                                  'name'=>'name', 
                                  'placeholder'=>'your product name', 
                                  'required' => 'required',
                                ]) }}
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                {{ Form::number('Price',null,[
                                    'class' => 'form-control col-md-7 col-xs-12',
                                    'name'=>'price', 
                                    'placeholder'=>'$0.00', 
                                    'required' => 'required',
                                ]) }}
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">status <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                {{ Form::select('status', config('settings.status_show'), config('settings.status.active'), [
                                    'class' => 'form-control col-md-7 col-xs-12',
                                    'name'=>'status', 
                                    'required' => 'required',
                                ]) }}
                            </div>
                        </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">service
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      
                        {{ Form::select('service_id',$items->pluck('title','id'),null,[
                            'class' => 'form-control',
                        ]) }}
                        </div>
                      </div>
                         <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{ Form::textarea('description',null,[
                            'class' => 'form-control col-md-7 col-xs-12',
                            'data-validate-length-range'=>'6',
                            'name'=>'description', 
                            'placeholder'=>'', 
                            'required' => 'required',
                        ]) }}
                        </div>
                      </div>
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Images <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-xs-12">
                              {{-- <!-- The file upload form used as target for the file upload widget -->
                                      <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                      <div class="row fileupload-buttonbar">
                                          <div class="col-lg-12">
                                              <!-- The fileinput-button span is used to style the file input field as button -->
                                              <span class="btn btn-success fileinput-button">
                                                  <i class="glyphicon glyphicon-plus"></i>
                                                  <span>Add files...</span>
                                                  {{ Form::file('files', ['multiple' => true]) }}
                                              </span>
                                              <button type="submit" class="btn btn-primary start">
                                                  <i class="glyphicon glyphicon-upload"></i>
                                                  <span>Start upload</span>
                                              </button>
                                              <button type="reset" class="btn btn-warning cancel">
                                                  <i class="glyphicon glyphicon-ban-circle"></i>
                                                  <span>Cancel upload</span>
                                              </button>
                                              <button type="button" class="btn btn-danger delete">
                                                  <i class="glyphicon glyphicon-trash"></i>
                                                  <span>Delete</span>
                                              </button>
                                              <input type="checkbox" class="toggle">
                                              <!-- The global file processing state -->
                                              <span class="fileupload-process"></span>
                                          </div>
                                          <!-- The global progress state -->
                                          <div class="col-lg-5 fileupload-progress fade">
                                              <!-- The global progress bar -->
                                              <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                  <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                              </div>
                                              <!-- The extended global progress state -->
                                              <div class="progress-extended">&nbsp;</div>
                                          </div>
                                      </div>
                                      <!-- The table listing the files available for upload/download -->
                                      <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
                                  
                                  <br> <!-- The blueimp Gallery widget -->
                              <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
                                  <div class="slides"></div>
                                  <h3 class="title"></h3>
                                  <a class="prev">‹</a>
                                  <a class="next">›</a>
                                  <a class="close">×</a>
                                  <a class="play-pause"></a>
                                  <ol class="indicator"></ol>
                              </div>
                              <!-- The template to display files available for upload -->
                              <script id="template-upload" type="text/x-tmpl">
                                    {% for (var i=0, file; file=o.files[i]; i++) { %}
                                        <tr class="template-upload fade">
                                            <td>
                                                <span class="preview"></span>
                                            </td>
                                            <td>
                                                <p class="name">{%=file.name%}</p>
                                                <strong class="error text-danger"></strong>
                                            </td>
                                            <td>
                                                <p class="size">Processing...</p>
                                                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                                            </td>
                                            <td>
                                                {% if (!i && !o.options.autoUpload) { %}
                                                    <button class="btn btn-primary start" disabled>
                                                        <i class="glyphicon glyphicon-upload"></i>
                                                        <span>Start</span>
                                                    </button>
                                                {% } %}
                                                {% if (!i) { %}
                                                    <button class="btn btn-warning cancel">
                                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                                        <span>Cancel</span>
                                                    </button>
                                                {% } %}
                                            </td>
                                        </tr>
                                    {% } %}
                              </script>
                              <!-- The template to display files available for download -->
                              <script id="template-download" type="text/x-tmpl">
                                    {% for (var i=0, file; file=o.files[i]; i++) { %}
                                        <tr class="template-download fade">
                                            <td>
                                                <span class="preview">
                                                    {% if (file.thumbnailUrl) { %}
                                                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                                                    {% } %}
                                                </span>
                                            </td>
                                            <td>
                                                <p class="name">
                                                    {% if (file.url) { %}
                                                        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                                                        <input type="hidden" name ="nameimgs[]['url']" value="{%=file.name%}">
                                                        <input type="checkbox" name ="nameimgs[]['type']" value="true">
                                                    {% } else { %}
                                                        <span>{%=file.name%}</span>
                                                    {% } %}
                                                </p>
                                                {% if (file.error) { %}
                                                    <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                                                {% } %}
                                            </td>
                                            <td>
                                                <span class="size">{%=o.formatFileSize(file.size)%}</span>
                                            </td>
                                            <td>
                                                {% if (file.deleteUrl) { %}
                                                    <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                                                        <i class="glyphicon glyphicon-trash"></i>
                                                        <span>Delete</span>
                                                    </button>
                                                    <input type="checkbox" name="delete" value="1" class="toggle">
                                                {% } else { %}
                                                    <button class="btn btn-warning cancel">
                                                        <i class="glyphicon glyphicon-ban-circle"></i>
                                                        <span>Cancel</span>
                                                    </button>
                                                {% } %}
                                            </td>
                                        </tr>
                                    {% } %}
                              </script> --}}
                              <!-- The file upload form used as target for the file upload widget -->
                            @include('admin.form_upload') 
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-6 col-md-offset-3">
                            <a href="{{ action('Admin\ProductsController@index') }}" class="btn btn-primary">Cancel </a>
                            {{ Form::submit('submit', ['class' => 'btn btn-success','id'=>'send']) }}
                          </div>
                        </div>
                    {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
 <!-- /page content -->
   
@endsection