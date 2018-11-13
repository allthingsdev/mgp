<?php 

namespace entities;

/**
 * @Entity
 * @Table(name="user")
 */
class User
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="smallint", name="user_id")
     */
    private $id;

    /**
     * @Column(type="string", name="first_name")
     */
    private $firstName;

    /**
     * @Column(type="string", name="last_name")
     */
    private $lastName;

    /**
     * @Column(type="string", name="user_name")
     */
    private $userName;

    /**
     * @Column(type="string", name="password")
     */
    private $password;

    /**
     * @Column(type="string", name="posted_at")
     */
    private $confirmPassword;

    /**
     * @Column(type="datetime", name="date_created")
     */
    private $date_created;
}
?>