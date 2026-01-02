<div class="col-md-4">
    <label class="form-label">Company Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="company_name" placeholder="Enter Group Name">
</div>

<!-- Short Name -->
<div class="col-md-4">
    <label class="form-label">Company Short Name <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="company_short_name" placeholder="Enter Company Short Name">
</div>

<!-- Reference No -->
<div class="col-md-4">
    <label class="form-label">Reference No <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="reference_no" placeholder="Enter Reference No">
</div>

<!-- Address 1 -->
<div class="col-md-6">
    <label class="form-label">Head / Corporate Office Address 1</label>
    <textarea class="form-control" name="head_office_address1" rows="2" placeholder="Enter Address"></textarea>
</div>

<!-- Address 2 -->
<div class="col-md-6">
    <label class="form-label">Head / Corporate Office Address 2</label>
    <textarea class="form-control" name="head_office_address2" rows="2" placeholder="Enter Address"></textarea>
</div>

<!-- State -->
<div class="col-md-3">
    <label class="form-label">State <span class="text-danger">*</span></label>
    <select class="form-select" name="state">
        <option value="">Select State</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
    </select>
</div>

<!-- City -->
<div class="col-md-3">
    <label class="form-label">City <span class="text-danger">*</span></label>
    <select class="form-select" name="city">
        <option value="">Select City</option>
        <option value="Madurai">Madurai</option>
    </select>
</div>

<!-- Pincode -->
<div class="col-md-3">
    <label class="form-label">Pincode <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="pincode" placeholder="Enter Pincode">
</div>

<!-- Contact Person -->
<div class="col-md-3">
    <label class="form-label">Contact Person <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="contact_person" placeholder="Enter Contact Person">
</div>

<!-- Mobile Number -->
<div class="col-md-3">
    <label class="form-label">Mobile Number <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="mobile_number" placeholder="Enter Mobile Number">
</div>

<!-- Telephone -->
<div class="col-md-3">
    <label class="form-label">Telephone No</label>
    <input type="text" class="form-control" name="telephone_no" placeholder="Enter Telephone Number">
</div>

<!-- Email -->
<div class="col-md-3">
    <label class="form-label">Email ID <span class="text-danger">*</span></label>
    <input type="email" class="form-control" name="email_id" placeholder="Enter Email ID">
</div>

<!-- URL -->
<div class="col-md-3">
    <label class="form-label">URL</label>
    <input type="text" class="form-control" name="website_url" placeholder="Enter URL">
</div>



   @include('partials.sidebar')
<form method="POST" action="{{ route('company.store') }}">
@csrf
                <div class="d-flex justify-content-end gap-3 sticky-footer mt-4">
                    <button class="btn btn-outline-primary px-4">Save Draft</button>
                    <button type="submit"class="btn btn-primary px-4">Submit</button>
                </div>

            </div>

        </main>
</form>


 public function store(Request $request)
    {
        $request->validate([
            'company_name'        => 'required|string|max:255',
            'company_short_name'  => 'required|string|max:100',
            'reference_no'        => 'required|string|max:100',
            'state'               => 'required',
            'city'                => 'required',
            'pincode'             => 'required|string|max:20',
            'contact_person'      => 'required|string|max:150',
            'mobile_number'       => 'required|string|max:20',
            'email_id'            => 'required|email|max:150',
        ]);

        DB::table('companies')->insert([
            'company_name'         => $request->company_name,
            'company_short_name'   => $request->company_short_name,
            'reference_no'         => $request->reference_no,
            'head_office_address1' => $request->head_office_address1,
            'head_office_address2' => $request->head_office_address2,
            'state'                => $request->state,
            'city'                 => $request->city,
            'pincode'              => $request->pincode,
            'contact_person'       => $request->contact_person,
            'mobile_number'        => $request->mobile_number,
            'telephone_no'         => $request->telephone_no,
            'email_id'             => $request->email_id,
            'website_url'          => $request->website_url,
            'status'               => 'active',
            'created_at'           => now(),
            'updated_at'           => now(),
        ]);

        return redirect()->back()->with('success', 'Company stored successfully');
    }
