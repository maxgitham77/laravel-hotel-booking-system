<?php

    namespace App\Traits;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\File;

    trait FileUploadTrait
    {
        function uploadFile(Request $request, string $inputName, ?string $oldPath = null, string $path = '/uploads'): ?string
        {
            if ($request->hasFile($inputName)) {
                $file = $request->{$inputName};
                $xtension = $file->getClientOriginalExtension();
                $fileName = 'media_'.uniqid().'.'.$xtension;

                $file->move(public_path($path), $fileName);

                $excludeFolder = '/default';

                if ($oldPath && File::exists(public_path($oldPath)) && strpos($oldPath, $excludeFolder) !== 0) {
                    File::delete(public_path($oldPath));
                }

                return $path . '/' . $fileName;
            }
            return null;
        }

        function deleteFile($path): void {
            $excludeFolder = '/default';

            if ($path && File::exists(public_path($path)) && strpos($path, $excludeFolder) !== 0) {
                File::delete(public_path($path));
            }
        }
    }
