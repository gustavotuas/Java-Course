package com.curso.java.curso.models;

import lombok.Getter;
import lombok.Setter;

import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

@Entity
@Table(name="usuarios")

public class Usuario {

    @Id @Getter @Setter @Column(name = "id", nullable = false)
    private Long id;

    @Getter @Setter @Column(name = "nombre", nullable = false)
    private String nombre;

    @Getter @Setter @Column(name = "apellido", nullable = false)
    private String apellido;

    @Getter @Setter @Column(name = "email", nullable = false)
    private String email;

    @Getter @Setter @Column(name = "telefono", nullable = false)
    private String telefono;

    @Getter @Setter @Column(name = "password", nullable = false)
    private String password;




}
