package com.curso.java.curso.controllers;


import com.curso.java.curso.dao.UsuarioDao;
import com.curso.java.curso.models.Usuario;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.*;

import javax.persistence.EntityManager;
import java.util.ArrayList;
import java.util.List;

@RestController
public class UsuarioController {

    @Autowired
    private UsuarioDao usuarioDao;
    EntityManager entityManager;

    @RequestMapping("api/usuario/{id}")
    public Usuario getusuario(@PathVariable Long id)
    {
        Usuario u = new Usuario();
        u.setId(id);
        u.setNombre("Gustavo");
        u.setApellido("Tua");
        u.setTelefono("09876623");

        return u;
    }


    @RequestMapping("api/usuarios")
    public List<Usuario> getusuarios()
    {
        return usuarioDao.getUsuarios();
    }


    @RequestMapping(value = "api/usuarios/{id}", method = RequestMethod.DELETE)
    public void eliminar(@PathVariable Long id)
    {
       usuarioDao.remove(id);
    }

    @RequestMapping(value = "api/usuarios", method = RequestMethod.POST)
    public void registrarUsuarios(@RequestBody Usuario usuario)
    {
        usuarioDao.registrar(usuario);
    }




}
