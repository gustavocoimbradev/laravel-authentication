<fieldset class="flex flex-col gap-1">
    <label for="{{ $id }}" class="text-slate-600 mb-1 text-sm">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" value="{{ $value }}" class="py-2 px-4 rounded-full border-1 border-slate-200 transition-all ease-in-out duration-300 focus:border-slate-400">
</fieldset>
