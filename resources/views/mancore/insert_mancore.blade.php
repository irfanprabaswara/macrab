@extends('_partials.layout')
{{-- @section('title', $title) --}}
@section('head')
@endsection

@section('body')
        <div class="app-container">
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Tambah Data Management Core</h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">GPON</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="example-container">
                                            <div class="example-content">
                                                <label for="inputMask3" class="form-label">IP address</label>
                                                <input type="text" class="form-control" aria-label="IP address" id="inputMask3" data-inputmask="'alias': 'ip'" inputmode="numeric">
                                            </div>
                                            <div class="example-content">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="example-content">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="example-content">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Rounded</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-description">Add <code>.form-control-rounded</code> to <code>.form-control</code> to make fields rounded.</p>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <input type="email" class="form-control form-control-rounded m-b-sm" aria-describedby="roundedInputExample" placeholder="Email Address">
                                                <input type="password" class="form-control form-control-solid-bordered form-control-rounded" aria-describedby="roundedSolidBorderedInputExample" placeholder="Password">
                                            </div>
                                            <div class="example-code">
                                                <pre><code class="html">&lt;input type=&quot;email&quot; class=&quot;form-control form-control-rounded&quot; aria-describedby=&quot;...&quot; placeholder=&quot;...&quot;&gt;
&lt;input type=&quot;password&quot; class=&quot;form-control form-control-solid-bordered form-control-rounded&quot; aria-describedby=&quot;...&quot; placeholder=&quot;...&quot;&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Select</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-description">Custom <code>&lt;select&gt;</code> menus need only a custom class, <code>.form-select</code> to trigger the custom styles. Custom styles are limited to the <code>&lt;select&gt;</code>’s initial appearance and cannot modify the <code>&lt;option&gt;</code>s due to browser limitations.</p>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="example-code">
                                                <pre><code class="html">&lt;select class=&quot;form-select&quot; aria-label=&quot;Default select example&quot;&gt;
    &lt;option selected&gt;Open this select menu&lt;/option&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Disabled</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-description">Add the <code>disabled</code> boolean attribute on an input to prevent user interactions and make it appear lighter.</p>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled>
                                            </div>
                                            <div class="example-code">
                                                <pre><code class="html">&lt;input class=&quot;form-control&quot; id=&quot;disabledInput&quot; type=&quot;text&quot; placeholder=&quot;Disabled input here...&quot; disabled&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Sizing</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-description">Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <input class="form-control form-control-lg m-b-sm" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
<input class="form-control m-b-sm" type="text" placeholder="Default input" aria-label="default input example">
<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                            </div>
                                            <div class="example-code">
                                                <pre><code class="html">&lt;input class=&quot;form-control form-control-lg&quot; type=&quot;text&quot; placeholder=&quot;.form-control-lg&quot; aria-label=&quot;.form-control-lg example&quot;&gt;
&lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Default input&quot; aria-label=&quot;default input example&quot;&gt;
&lt;input class=&quot;form-control form-control-sm&quot; type=&quot;text&quot; placeholder=&quot;.form-control-sm&quot; aria-label=&quot;.form-control-sm example&quot;&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Radios</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="example-container">
                                            <div class="example-content">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Default radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Default checked radio
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="example-code">
                                                <pre><code class="html">&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;flexRadioDefault1&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault1&quot;&gt;
        Default radio
    &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;radio&quot; name=&quot;flexRadioDefault&quot; id=&quot;flexRadioDefault2&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexRadioDefault2&quot;&gt;
        Default checked radio
    &lt;/label&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Switches</h5>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-description">A switch has the markup of a custom checkbox but uses the <code>.form-switch</code> class to render a toggle switch. Switches also support the <code>disabled</code> attribute.</p>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled>
                                                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                                                </div>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked disabled>
                                                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                                                </div>
                                            </div>
                                            <div class="example-code">
                                                <pre><code class="html">&lt;div class=&quot;form-check form-switch&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;flexSwitchCheckDefault&quot;&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDefault&quot;&gt;Default switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;flexSwitchCheckChecked&quot; checked&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckChecked&quot;&gt;Checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;flexSwitchCheckDisabled&quot; disabled&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckDisabled&quot;&gt;Disabled switch checkbox input&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;form-check form-switch&quot;&gt;
    &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; id=&quot;flexSwitchCheckCheckedDisabled&quot; checked disabled&gt;
    &lt;label class=&quot;form-check-label&quot; for=&quot;flexSwitchCheckCheckedDisabled&quot;&gt;Disabled checked switch checkbox input&lt;/label&gt;
&lt;/div&gt;</code></pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <h5>Distribusi</h5>
                        </div>
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card widget widget-info-navigation">
                                    <div class="card-body">
                                        <div class="widget-info-navigation-container">
                                            <div class="widget-info-navigation-content">
                                                <span class="text-muted">Core Total</span><br>
                                                <span class="text-dark fw-bolder fs-2">24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card widget widget-info-navigation">
                                    <div class="card-body">
                                        <div class="widget-info-navigation-container">
                                            <div class="widget-info-navigation-content">
                                                <span class="text-muted">Core Isi</span><br>
                                                <span class="text-dark fw-bolder fs-2">24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card widget widget-info-navigation">
                                    <div class="card-body">
                                        <div class="widget-info-navigation-container">
                                            <div class="widget-info-navigation-content">
                                                <span class="text-muted">Core Idle</span><br>
                                                <span class="text-success fw-bolder fs-2">24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card widget widget-info-navigation">
                                    <div class="card-body">
                                        <div class="widget-info-navigation-container">
                                            <div class="widget-info-navigation-content">
                                                <span class="text-muted">Core Rusak</span><br>
                                                <span class="text-danger fw-bolder fs-2">24</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <h5>Data Management Core</h5>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable3" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Extn.</th>
                                            <th>E-mail</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Extn.</th>
                                            <th>E-mail</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Extn.</th>
                                            <th>E-mail</th>
                                            <th>Extn.</th>
                                            <th>E-mail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>tea</td>
                                            <td>hollow</td>
                                            <td>exchange</td>
                                            <td>means</td>
                                            <td>ask</td>
                                            <td>lungs</td>
                                            <td>window</td>
                                            <td>verb</td>
                                            <td>create</td>
                                            <td>sometime</td>
                                            <td>officer</td>
                                            <td>author</td>
                                            <td>thread</td>
                                            <td>military</td>
                                            <td>combination</td>
                                            <td>bad</td>
                                            <td>jar</td>
                                            <td>trouble</td>
                                            <td>material</td>
                                            <td>busy</td>
                                            <td>nose</td>
                                            <td>exist</td>
                                            <td>temperature</td>
                                            <td>station</td>
                                            <td>dark</td>
                                            <td>scene</td>
                                            <td>cook</td>
                                            <td>recent</td>
                                            <td>key</td>
                                        </tr>
                                        <tr>
                                            <td>shop</td>
                                            <td>luck</td>
                                            <td>time</td>
                                            <td>either</td>
                                            <td>park</td>
                                            <td>key</td>
                                            <td>summer</td>
                                            <td>distance</td>
                                            <td>ride</td>
                                            <td>into</td>
                                            <td>had</td>
                                            <td>numeral</td>
                                            <td>you</td>
                                            <td>near</td>
                                            <td>teach</td>
                                            <td>were</td>
                                            <td>your</td>
                                            <td>running</td>
                                            <td>possibly</td>
                                            <td>swim</td>
                                            <td>merely</td>
                                            <td>own</td>
                                            <td>word</td>
                                            <td>experiment</td>
                                            <td>happy</td>
                                            <td>agree</td>
                                            <td>shells</td>
                                            <td>left</td>
                                            <td>fair</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('java')

@endsection
