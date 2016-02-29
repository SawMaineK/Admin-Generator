<div class="tab-pane active" id="users">
  <div class="widget-container fluid-height">
    <div class="widget-content">
      <div class="panel-group" id="accordion">
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              <a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#faq0">
                <div class="caret pull-right"></div>
                GET - http:://yourdomain.com/api/v1/users
              </a>
            </div>
          </div>
          <div class="panel-collapse collapse in" id="faq0">
            <div class="panel-body">
              <h4># Getting user lists.</h4>
              
              <div class="input-group">
                <span class="input-group-addon">GET</span><input class="form-control" type="text" value="http:://yourdomain.com/api/v1/users"><span class="input-group-addon btn-primary" style="cursor: pointer;">TEST</span></input>
              </div>
              <div class="heading">
                <i class="fa fa-quote-left"></i>Response - Status: OK <i class="fa fa-smile-o"></i>
              </div>
              <div class="widget-content padded">
                <blockquote>
                  <p>
                   <em>Empty Result</em>
                  </p>
                  <small>Total Result: 30 Raws<em class="pull-right"><i class="fa fa-clock-o"></i> 2.3 ms</em></small>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              <a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#faq1">
                <div class="caret pull-right"></div>
                GET - http:://yourdomain.com/api/v1/users/1
              </a>
            </div>
          </div>
          <div class="panel-collapse collapse" id="faq1">
            <div class="panel-body">
              <h4># Show user by id.</h4>
              
              <div class="input-group">
                <span class="input-group-addon">GET</span><input class="form-control" type="text" value="http:://yourdomain.com/api/v1/users/1"><span class="input-group-addon btn-primary" style="cursor: pointer;">TEST</span></input>
              </div>
              <div class="heading">
                <i class="fa fa-quote-left"></i>Response
              </div>
              <div class="widget-content padded">
                <blockquote>
                  <p>
                   <em>Empty Result</em>
                  </p>
                  <small>@JohnDoe</small>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq2">
                <div class="caret pull-right"></div>
                POST - http:://yourdomain.com/api/v1/users
                </a>
            </div>
          </div>
          <div class="panel-collapse collapse" id="faq2">
            <div class="panel-body">
              <h4># Create new user.</h4>
              
              <div class="input-group">
                <span class="input-group-addon">POST</span><input class="form-control" type="text" value="http:://yourdomain.com/api/v1/users"><span class="input-group-addon btn-primary" style="cursor: pointer;">TEST</span></input>
              </div>
              <br>
              <h5>
                <em># Click fields below to edit</em>
              </h5>
              <table class="table table-bordered table-striped editable-form" id="user" style="clear: both">
                <tbody>
                  <tr>
                    <td width="35%">
                      Simple text field
                    </td>
                    <td>
                      <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username">Username</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Empty text field, required
                    </td>
                    <td>
                      <a data-original-title="Enter your firstname" data-pk="1" data-placeholder="Required" data-placement="right" data-type="text" href="#" id="firstname"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select, local array, custom display
                    </td>
                    <td>
                      <a data-original-title="Select sex" data-pk="1" data-type="select" data-value="" href="#" id="sex"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select, remote array, no buttons
                    </td>
                    <td>
                      <a data-original-title="Select group" data-pk="1" data-source="/groups" data-type="select" data-value="5" href="#" id="group">Admin</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select, error while loading
                    </td>
                    <td>
                      <a data-original-title="Select status" data-pk="1" data-source="/status" data-type="select" data-value="0" href="#" id="status">Active</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Combodate (date)
                    </td>
                    <td>
                      <a data-format="YYYY-MM-DD" data-original-title="Select Date of birth" data-pk="1" data-template="D / MMM / YYYY" data-type="combodate" data-value="1984-05-15" data-viewformat="DD/MM/YYYY" href="#" id="dob"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Combodate (datetime)
                    </td>
                    <td>
                      <a data-format="YYYY-MM-DD HH:mm" data-original-title="Setup event date and time" data-pk="1" data-template="D MMM YYYY  HH:mm" data-type="combodate" data-viewformat="MMM D, YYYY, HH:mm" href="#" id="event"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Textarea, buttons below. Submit by <i>ctrl+enter</i>
                    </td>
                    <td>
                      <a data-original-title="Enter comments" data-pk="1" data-placeholder="Your comments here..." data-type="textarea" href="#" id="comments">awesomeuser!</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Checklist
                    </td>
                    <td>
                      <a data-original-title="Select fruits" data-type="checklist" data-value="2,3" href="#" id="fruits"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select2 (tags mode)
                    </td>
                    <td>
                      <a data-original-title="Enter tags" data-pk="1" data-type="select2" href="#" id="tags"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select2 (dropdown mode)
                    </td>
                    <td>
                      <a data-original-title="Select country" data-pk="1" data-type="select2" data-value="BS" href="#" id="country"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Custom input, several fields
                    </td>
                    <td>
                      <a data-original-title="Please, fill address" data-pk="1" data-type="address" href="#" id="address"></a>
                    </td>
                  </tr>
                </tbody>
              </table>              
              
              <div class="heading">
                <i class="fa fa-quote-left"></i>Response
              </div>
              <div class="widget-content padded">
                <blockquote>
                  <p>
                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustain able.

                  </p>
                  <small>@JohnDoe</small>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#faq3">
                <div class="caret pull-right"></div>
                PUT - http:://yourdomain.com/api/v1/users/1
                </a>
            </div>
          </div>
          <div class="panel-collapse collapse" id="faq3">
            <div class="panel-body">
              <h4># Update existing user.</h4>
              
              <div class="input-group">
                <span class="input-group-addon">PUT</span><input class="form-control" type="text" value="http:://yourdomain.com/api/v1/users"><span class="input-group-addon btn-primary" style="cursor: pointer;">TEST</span></input>
              </div>
              <br>
              <h5>
                <em># Click fields below to edit</em>
              </h5>
              <table class="table table-bordered table-striped editable-form" id="user" style="clear: both">
                <tbody>
                  <tr>
                    <td width="35%">
                      Simple text field
                    </td>
                    <td>
                      <a data-original-title="Enter username" data-pk="1" data-type="text" href="#" id="username">Username</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Empty text field, required
                    </td>
                    <td>
                      <a data-original-title="Enter your firstname" data-pk="1" data-placeholder="Required" data-placement="right" data-type="text" href="#" id="firstname"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select, local array, custom display
                    </td>
                    <td>
                      <a data-original-title="Select sex" data-pk="1" data-type="select" data-value="" href="#" id="sex"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select, remote array, no buttons
                    </td>
                    <td>
                      <a data-original-title="Select group" data-pk="1" data-source="/groups" data-type="select" data-value="5" href="#" id="group">Admin</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select, error while loading
                    </td>
                    <td>
                      <a data-original-title="Select status" data-pk="1" data-source="/status" data-type="select" data-value="0" href="#" id="status">Active</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Combodate (date)
                    </td>
                    <td>
                      <a data-format="YYYY-MM-DD" data-original-title="Select Date of birth" data-pk="1" data-template="D / MMM / YYYY" data-type="combodate" data-value="1984-05-15" data-viewformat="DD/MM/YYYY" href="#" id="dob"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Combodate (datetime)
                    </td>
                    <td>
                      <a data-format="YYYY-MM-DD HH:mm" data-original-title="Setup event date and time" data-pk="1" data-template="D MMM YYYY  HH:mm" data-type="combodate" data-viewformat="MMM D, YYYY, HH:mm" href="#" id="event"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Textarea, buttons below. Submit by <i>ctrl+enter</i>
                    </td>
                    <td>
                      <a data-original-title="Enter comments" data-pk="1" data-placeholder="Your comments here..." data-type="textarea" href="#" id="comments">awesomeuser!</a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Checklist
                    </td>
                    <td>
                      <a data-original-title="Select fruits" data-type="checklist" data-value="2,3" href="#" id="fruits"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select2 (tags mode)
                    </td>
                    <td>
                      <a data-original-title="Enter tags" data-pk="1" data-type="select2" href="#" id="tags"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Select2 (dropdown mode)
                    </td>
                    <td>
                      <a data-original-title="Select country" data-pk="1" data-type="select2" data-value="BS" href="#" id="country"></a>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Custom input, several fields
                    </td>
                    <td>
                      <a data-original-title="Please, fill address" data-pk="1" data-type="address" href="#" id="address"></a>
                    </td>
                  </tr>
                </tbody>
              </table>              
              
              <div class="heading">
                <i class="fa fa-quote-left"></i>Response
              </div>
              <div class="widget-content padded">
                <blockquote>
                  <p>
                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustain able.

                  </p>
                  <small>@JohnDoe</small>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              <a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#faq4">
                <div class="caret pull-right"></div>
                DELETE - http:://yourdomain.com/api/v1/users/1
              </a>
            </div>
          </div>
          <div class="panel-collapse collapse" id="faq4">
            <div class="panel-body">
              <h4># Delete user by id.</h4>
              
              <div class="input-group">
                <span class="input-group-addon">DELETE</span><input class="form-control" type="text" value="http:://yourdomain.com/api/v1/users/1"><span class="input-group-addon btn-primary" style="cursor: pointer;">TEST</span></input>
              </div>
              <div class="heading">
                <i class="fa fa-quote-left"></i>Response
              </div>
              <div class="widget-content padded">
                <blockquote>
                  <p>
                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustain able.

                  </p>
                  <small>@JohnDoe</small>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="tab-pane" id="roles">
  <div class="widget-container fluid-height">
    <div class="widget-content">
      <div class="panel-group" id="accordion">
        <div class="panel">
          <div class="panel-heading">
            <div class="panel-title">
              <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#roles1">
                <div class="caret pull-right"></div>
                2. Donec odio uisque volutpat mattis eros?</a>
            </div>
          </div>
          <div class="panel-collapse collapse in" id="roles1">
            <div class="panel-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustain able.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
