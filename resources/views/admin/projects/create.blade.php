@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Add New Project</h2>

                <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                            Project Name *
                        </label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                            Category * <span class="text-gray-600 font-normal">(Select which gallery to add this project to)</span>
                        </label>
                        <select name="category" id="category" required
                            class="shadow appearance-none border-2 rounded w-full py-3 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-blue-500 @error('category') border-red-500 @enderror">
                            <option value="">-- Choose Electrical or Construction Gallery --</option>
                            <option value="electrical" {{ old('category') == 'electrical' ? 'selected' : '' }}>⚡ Electrical Works Gallery</option>
                            <option value="construction" {{ old('category') == 'construction' ? 'selected' : '' }}>🏗️ Construction Works Gallery</option>
                        </select>
                        <p class="text-gray-600 text-xs mt-1">This determines which gallery dropdown the project will appear in on the website.</p>
                        @error('category')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="duration">
                            Duration *
                        </label>
                        <input type="text" name="duration" id="duration" value="{{ old('duration') }}" required
                            placeholder="e.g., 6 months"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('duration') border-red-500 @enderror">
                        @error('duration')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="client">
                            Client *
                        </label>
                        <input type="text" name="client" id="client" value="{{ old('client') }}" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('client') border-red-500 @enderror">
                        @error('client')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="consultant">
                            Consultant *
                        </label>
                        <input type="text" name="consultant" id="consultant" value="{{ old('consultant') }}" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('consultant') border-red-500 @enderror">
                        @error('consultant')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="cost">
                            Cost (R) *
                        </label>
                        <input type="number" step="0.01" name="cost" id="cost" value="{{ old('cost') }}" required
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('cost') border-red-500 @enderror">
                        @error('cost')
                            <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            Project Images (Max 4)
                        </label>
                        <div class="grid grid-cols-2 gap-4">
                            @for($i = 1; $i <= 4; $i++)
                                <div>
                                    <label class="block text-gray-600 text-sm mb-2" for="image{{ $i }}">
                                        Image {{ $i }}
                                    </label>
                                    <input type="file" name="image{{ $i }}" id="image{{ $i }}" accept="image/*"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('image'.$i) border-red-500 @enderror">
                                    @error('image'.$i)
                                        <p class="text-red-500 text-xs italic mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div class="flex items-center justify-between mt-6">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Create Project
                        </button>
                        <a href="{{ route('admin.projects.index') }}" class="text-gray-600 hover:text-gray-800">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
