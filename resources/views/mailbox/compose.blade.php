@extends('layouts.admin')

@section('title')
	<h1>Compose</h1>
@endsection

@section('content')
	   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="/mailbox/inbox" class="btn btn-primary btn-block mb-3">Back to Inbox</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Folders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="/mailbox/inbox" class="nav-link">
                      <i class="fa fa-inbox"></i> Inbox
                      <span class="badge bg-primary float-right"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/mailbox/sent" class="nav-link">
                      <i class="fa fa-envelope-o"></i> Sent
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/mailbox/draft" class="nav-link">
                      <i class="fa fa-file-text-o"></i> Drafts
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/mailbox/trash" class="nav-link">
                      <i class="fa fa-trash-o"></i> Trash
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Compose New Message</h3>
              </div>
              <!-- /.card-header -->
              <form action="/mailbox/compose/send" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <input class="form-control" value="{{ Auth::user()->name }}" name="from" readonly>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="To:" name="to">
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Subject:" name="subject">
                </div>
                <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="message">
                      <h1><u>Heading Of Message</u></h1>
                      <h4>Subheading</h4>
                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                        but because occasionally circumstances occur in which toil and pain can procure him some great
                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                        except to obtain some advantage from it? But who has any right to find fault with a man who
                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                        blinded by desire, that they cannot foresee</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>John Doe</p>
                    </textarea>
                </div>
                <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fa fa-paperclip"></i> Attachment
                    <input type="file" name="attachment">
                  </div>
                  <p class="help-block">Max. 32MB</p>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                  <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                  <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                </div>
                <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
              </div>
              </form>
              <!-- /.card-footer -->
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection