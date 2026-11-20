use Illuminate\Support\Facades\Storage;

public function update(Request $request, Post $post)
{
    // 1. Validar los datos
    $request->validate([
        'title' => 'required|max:255',
    'category_id' => 'required',
    'image' => 'nullable|image|max:2048',
]);

    $data = $request->only(['title', 'category_id', 'content']);

    // 2. Comprobar si se subió una nueva imagen
    if ($request->hasFile('image')) {

        // Si el post ya tenía una imagen guardada anteriormente, la borramos
        if ($post->image && Storage::disk('public')->exists($post->image)) {
            Storage::disk('public')->delete($post->image);
        }

        // Guardar la nueva imagen
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('uploads', $filename, 'public');

        $data['image'] = 'uploads/' . $filename;
    }

    // 3. Actualizar el registro en la base de datos
    $post->update($data);

    return response()->json($post);
}
