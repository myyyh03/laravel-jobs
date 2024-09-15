<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$60,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Remote" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://job/job_desc" />
        <x-forms.checkbox label="Feature" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags" name="tags" placeholder="video , education , programming" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
