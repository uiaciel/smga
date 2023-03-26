@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body bg-dark text-white mailbox-widget pb-0">
                        <h2 class="text-white pb-3">Your Mailbox</h2>
                        <ul class="nav nav-tabs custom-tab border-bottom-0 mt-4" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="inbox-tab" data-bs-toggle="tab" aria-controls="inbox"
                                    href="#inbox" data-bs-target="#inbox" type="button" role="tab"
                                    aria-selected="true">
                                    <span class="d-block d-md-none"><i class="fa-solid fa-envelope"></i></span>
                                    <span class="d-none d-md-block"> INBOX</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white" id="sent-tab" data-bs-toggle="tab" aria-controls="sent"
                                    href="#sent" data-bs-target="#sent" type="button" role="tab"
                                    aria-selected="false">
                                    <span class="d-block d-md-none"><i class="ti-export"></i></span>
                                    <span class="d-none d-md-block">SENT</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white" id="spam-tab" data-bs-toggle="tab" aria-controls="spam"
                                    href="#spam" data-bs-target="#spam" type="button" role="tab"
                                    aria-selected="false">
                                    <span class="d-block d-md-none"><i class="ti-panel"></i></span>
                                    <span class="d-none d-md-block">SPAM</span>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-white" id="delete-tab" data-bs-toggle="tab" aria-controls="delete"
                                    href="#delete" data-bs-target="#delete" type="button" role="tab"
                                    aria-selected="false">
                                    <span class="d-block d-md-none"><i class="ti-trash"></i></span>
                                    <span class="d-none d-md-block">DELETED</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                            <div>
                                <div class="p-4 d-flex justify-content-between ">
                                    <h3 class="font-light mb-0"><i class="ti-email mr-2"></i>350 Unread emails</h3>
                                    <div>
                                        <ul class="list-inline dl mb-0 float-left float-md-right">
                                            <li class="list-inline-item text-info mr-3">
                                                <a href="#">
                                                    <button class="btn btn-circle btn-success text-white"
                                                        href="javascript:void(0)">
                                                        <i class="fa fa-plus"></i>
                                                    </button>
                                                    <span class="ml-2 font-normal text-dark">Compose</span>
                                                </a>
                                            </li>
                                            <li class="list-inline-item text-danger">
                                                <a href="#">
                                                    <button class="btn btn-circle btn-danger text-white"
                                                        href="javascript:void(0)">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    <span class="ml-2 font-normal text-dark">Delete</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Mail list-->
                                <div class="table-responsive">
                                    <table class="table email-table no-wrap table-hover mb-0 font-14">
                                        <tbody>
                                            @forelse ($contacts as $inbox)
                                                <tr>
                                                    <!-- label -->
                                                    <td class="pl-3">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="cst1" />
                                                            <label class="custom-control-label"
                                                                for="cst1">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <!-- star -->
                                                    <td><i class="fa fa-star text-warning"></i></td>
                                                    <td>
                                                        <span class="mb-0 text-muted">{{ $inbox->email }}</span>
                                                    </td>
                                                    <!-- Message -->
                                                    <td>
                                                        <a class="link" href="" data-bs-toggle="modal"
                                                            data-bs-target="#edit{{ $inbox->id }}">
                                                            <span
                                                                class="badge badge-pill text-white font-medium badge-danger mr-2">Work</span>
                                                            <span class="text-dark">{{ $inbox->subject }}</span>
                                                        </a>
                                                    </td>
                                                    <!-- Attachment -->

                                                    <!-- Time -->
                                                    <td class="text-muted">{{ $inbox->date }}</td>
                                                    <td class="text-end">
                                                        <form onsubmit="return confirm('{{ __('admincp.areyousure') }}');"
                                                            action="{{ route('contacts.destroy', $inbox->id) }}"
                                                            method="POST">
                                                            <a href="" data-bs-toggle="modal"
                                                                data-bs-target="#edit{{ $inbox->id }}"
                                                                class="btn btn-sm btn-primary"><i
                                                                    class="fa-solid fa-envelope-open-text"></i></a>
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"><i
                                                                    class="fa-solid fa-trash"></i></button>
                                                        </form>
                                                    </td>
                                                    <div class="modal fade" id="edit{{ $inbox->id }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-dark">
                                                                    <h5 class="modal-title text-white"
                                                                        id="exampleModalLabel">Message
                                                                        from {{ $inbox->email }}
                                                                    </h5>
                                                                    <button type="button" class="btn-close text-white"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <form action="{{ route('contacts.update', $inbox->id) }}"
                                                                    method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-body">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1"
                                                                                class="form-label">Subject</label>
                                                                            <input type="text" class="form-control"
                                                                                value="{{ $inbox->subject }}">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlTextarea1"
                                                                                class="form-label">Message</label>
                                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="7">{{ $inbox->subject }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">

                                                                        <button type="submit"
                                                                            class="btn btn-primary">Reply</button>
                                                                    </div>

                                                            </div>


                                                            </form>
                                                        </div>
                                                    </div>
                                                </tr>
                                            @empty
                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
                            <div class="row p-3 text-dark">
                                <div class="col-md-6">
                                    <h3 class="font-light">Lets check profile</h3>
                                    <h4 class="font-light">you can use it with the small code</h4>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                        rhoncus ut, imperdiet a.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="spam" aria-labelledby="spam-tab" role="tabpanel">
                            <div class="row p-3 text-dark">
                                <div class="col-md-6">
                                    <h3 class="font-light">Come on you have a lot message</h3>
                                    <h4 class="font-light">you can use it with the small code</h4>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                        rhoncus ut, imperdiet a.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="delete" aria-labelledby="delete-tab" role="tabpanel">
                            <div class="row p-3 text-dark">
                                <div class="col-md-6">
                                    <h3 class="font-light">Just do Settings</h3>
                                    <h4 class="font-light">you can use it with the small code</h4>
                                </div>
                                <div class="col-md-6 text-right">
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,
                                        rhoncus ut, imperdiet a.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
