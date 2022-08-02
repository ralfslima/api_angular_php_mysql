import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { FormGroup } from '@angular/forms';
import { Curso } from './modelo/Curso';

@Injectable({
  providedIn: 'root'
})
export class CursoService {

  // Construtor
  constructor(private http:HttpClient) { }

  // Cadastrar curso
  cadastrar(f : FormGroup){
    console.log(f.value);
    return this.http.post<Curso>('http://localhost:80/back/cadastrar', f.value);
  }

  // Listar cursos
  listar(){
    return this.http.get<Curso[]>('http://localhost:80/back/listar');
  }
}
