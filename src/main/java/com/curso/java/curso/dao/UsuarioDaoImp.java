package com.curso.java.curso.dao;

import com.curso.java.curso.models.Usuario;
import org.springframework.stereotype.Repository;
import org.springframework.transaction.annotation.Transactional;


import javax.persistence.EntityManager;
import javax.persistence.PersistenceContext;
import java.util.List;
@Repository
@Transactional

public class UsuarioDaoImp implements UsuarioDao  {

    @PersistenceContext
    EntityManager entityManager;

    public List<Usuario> getUsuarios() {

        String query = "From Usuario";
        return  entityManager.createQuery(query).getResultList();

    }

    @Override
    public void remove(Long id) {

        Usuario usuario = entityManager.find(Usuario.class, id);
        entityManager.remove(usuario);
    }

    @Override
    public void registrar(Usuario usuario) {
        entityManager.merge(usuario);
    }
}
