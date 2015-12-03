<div class="col-md-4" style="border:1px solid #ccc;margin-left:15px;padding:10px;">
                <h4 class="page-header">
                    Collaborators
                </h4>
                <form class="form-vertical" role="form" method="post" action="{{ route('projects.collaborators.create', $project->id) }}">
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label> Add New </label>
                    <input type="text" name="task_name" class="form-control" id="name" value="{{ old('task_name') ?: '' }}">
                    @if ($errors->has('task_name'))
                        <span class="help-block">{{ $errors->first('task_name') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">Add User</button>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </form>
</div>