<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
    */
     
    public function rules(): array
    {
        // Obtener el método HTTP
        $method = $this->method();

        // Definir reglas según el tipo de solicitud
        if ($method === 'POST') {
            // Reglas para INSERTAR
            return [
                'id' => 'required|numeric|min:1|unique:productos,id',
                'nombre' => 'required|string|max:255',
                'precio' => 'required|numeric|min:0',
                'tipo' => 'required|string|max:255',
            ];
        } elseif ($method === 'PUT' || $method === 'PATCH') {
            // Reglas para MODIFICAR
            return [
                'id' => 'required|numeric|exists:productos,id',
                'nombre' => 'sometimes|string|max:255',
                'precio' => 'sometimes|numeric|min:0',
                'tipo' => 'sometimes|string|max:255',
            ];
        } elseif ($method === 'DELETE') {
            // Reglas para ELIMINAR
            return [
                'id' => 'required|numeric|exists:productos,id',
            ];
        }
    }
}