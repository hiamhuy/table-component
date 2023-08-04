<div class="p-6" x-data="{checked:false}">
    <button type="button" @click="checked = true"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 
        font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 
        dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
        Bấm
    </button>


    <div class="flex items-center">
        <input id="checked-checkbox" type="checkbox" x-model="checked" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="checked-checkbox" class="ml-2 text-sm font-medium text-white dark:text-gray-300">Checked state</label>
    </div>


    <div x-show="checked">
        Content...
    </div>

</div>