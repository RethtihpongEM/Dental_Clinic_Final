<div class="flex items-center">
    <input checked id="checked-checkbox" type="checkbox" name="cb" value="check" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="checked-checkbox" class="p-3 text-gray-900">Send {{ $patient->firstName.' '.$patient->lastName }} this update</label>
</div>