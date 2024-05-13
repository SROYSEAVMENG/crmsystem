
    @extends('admin.admin_dashboard')
    @section('admin')
    <style>
      .page-breadcrumb .breadcrumb {
        background: aliceblue;
    }
    .form-select {
        background-color: aliceblue;
      }
      .form-control{
        background-color: aliceblue;
      }
      .pagination {
        --bs-pagination-disabled-bg: aliceblue;
      }
      .fc-event-main{
        color: black !important;
      }
      .fc .fc-toolbar-title {
        color: black !important;
      }
      .fc .fc-daygrid-day-number, .fc .fc-col-header-cell-cushion {
        color: black;
      }
      .form-label{
        color: black;
      }
    label > span {
        color: red;
        margin-left: 3px;
    }
    .form-control{
        background-color: aliceblue !important;
        color: black !important;
    }

    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="page-content" style="background-color: aliceblue;">

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3 d-none d-md-block">
                        <div class="card" style="border: none!important;">
                            <div class="card-body" style="background-color: aliceblue;border:none !important">
                                <h6 class="card-title mb-4" style="color: black;">Full calendar</h6>
            <div id='external-events' class='external-events'>
              <h6 class="mb-2 text-muted" style="color: gray;">Draggable Events</h6>
              <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                <div class='fc-event-main'>Birth Day</div>
              </div>
              <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                <div class='fc-event-main'>New Project</div>
              </div>
              <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                <div class='fc-event-main'>Anniversary</div>
              </div>
              <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                <div class='fc-event-main'>Clent Meeting</div>
              </div>
              <div class='fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event'>
                <div class='fc-event-main'>Office Trip</div>
              </div>
            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-9" >
                        <div class="card" style="border: none;">
                            <div class="card-body" style="background-color: aliceblue !important; border:none !important;">
                                <div id='fullcalendar'></div>
                            </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fullCalModal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modalTitle1" class="modal-title"></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
                    </div>
                    <div id="modalBody1" class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Event Page</button>
                    </div>
                </div>
            </div>
        </div>

        <div id="createEventModal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color:aliceblue;">
                    <div class="modal-header">
                        <h4 id="modalTitle2" class="modal-title" style="color: black;">Add event</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span class="visually-hidden">close</span></button>
                    </div>
                    <div id="modalBody2" class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Example label <span>*</span></label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" required>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Another label <span>*</span></label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

