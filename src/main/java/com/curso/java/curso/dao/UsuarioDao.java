package com.curso.java.curso.dao;

import com.curso.java.curso.models.Usuario;

import java.util.List;

public interface UsuarioDao {

    List<Usuario> getUsuarios();

    void remove(Long id);
}
