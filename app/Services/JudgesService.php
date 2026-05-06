<?php

namespace App\Services;

use App\Models\Judges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JudgesService
{

    # -------------------------------------------------------------------------- #
    # STATISTICS                                                                 #
    # -------------------------------------------------------------------------- #
    public function getStatistics()
    {
        $base = Judges::active();
        return [
            'total_judges'      => $base->count(),
            'assessment_one'    => (clone $base)->where('judges_task', Judges::TASK_ASSESSMENT_ONE)->count(),
            'assessment_two'    => (clone $base)->where('judges_task', Judges::TASK_ASSESSMENT_TWO)->count(),
            'final_assessment'  => (clone $base)->where('judges_task', Judges::TASK_FINAL_ASSESSMENT)->count(),
        ];
    }


    # -------------------------------------------------------------------------- #
    # Index + Show                                                               #
    # -------------------------------------------------------------------------- #
    public function getAll()
    {
        return Judges::active()->orderName()->get();
    }

    public function findById(string $id)
    {
        return Judges::where('status_data', 'Active')->where('id_judges', $id)->firstOrFail();
    }


    # -------------------------------------------------------------------------- #
    # ADD Data to Database                                                       #
    # -------------------------------------------------------------------------- #
    public function store(Request $request)
    {
        # validate form
        $validated = Validator::make($request->all(), [
            'judges_name'           => 'required|string|max:255',
            'origin_country'        => 'required|string|max:255',
            'origin_institution'    => 'required|string|max:255',
            'judges_task'           => 'required|string|max:255',
            'judges_photo'          => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'email'                 => 'required|email|unique:tb_judges,email',
            'password'              => 'required|string|min:8',
        ])->validate();

        # hash password
        $validated['password'] = Hash::make($validated['password']);

        # upload photo
        if ($request->hasFile('judges_photo')) {
            $validated['judges_photo'] = $request->file('judges_photo')->store('judges', 'public');
        }

        return Judges::create($validated);
    }

    public function update(string $id, array $data)
    {
        $judges = $this->findById($id);

        $validated = Validator::make($data, [
            'judges_name'           => 'required|string|max:255',
            'origin_country'        => 'required|string|max:255',
            'origin_institution'    => 'required|string|max:255',
            'judges_task'           => 'required|string|max:255',
            'judges_photo'          => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'email'                 => 'required|email|unique:tb_judges,email,' . $id . ',id_judges',
            'password'              => 'nullable|string|min:8',
        ])->validate();

        if (!empty($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        if (isset($data['judges_photo'])) {
            $validated['judges_photo'] = $data['judges_photo']->store('judges', 'public');
        }

        return $judges->update($validated);
    }


    public function destroy(string $id)
    {
        $judges = Judges::findOrFail($id);
        $judges->update(['status_data' => 'Not Active']);
        $judges->delete();

        return $judges;
    }
}
