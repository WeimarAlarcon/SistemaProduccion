PGDMP     %                     z            bd_mejorado    13.4    13.4 ?    ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    31359    bd_mejorado    DATABASE     o   CREATE DATABASE bd_mejorado WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Spanish_United States.1252';
    DROP DATABASE bd_mejorado;
                postgres    false            ?            1259    31360    almacen    TABLE     J   CREATE TABLE public.almacen (
    id integer NOT NULL,
    nombre text
);
    DROP TABLE public.almacen;
       public         heap    postgres    false            ?            1259    31366    almacen_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.almacen_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.almacen_id_seq;
       public          postgres    false    200            ?           0    0    almacen_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.almacen_id_seq OWNED BY public.almacen.id;
          public          postgres    false    201            ?            1259    31368    cliente    TABLE     ?   CREATE TABLE public.cliente (
    id integer NOT NULL,
    celular integer,
    idpersona integer,
    nombre text,
    apellido text
);
    DROP TABLE public.cliente;
       public         heap    postgres    false            ?            1259    31371    cliente_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.cliente_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.cliente_id_seq;
       public          postgres    false    202            ?           0    0    cliente_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.cliente_id_seq OWNED BY public.cliente.id;
          public          postgres    false    203            ?            1259    31373    compra_insumo    TABLE     o   CREATE TABLE public.compra_insumo (
    id integer NOT NULL,
    fecha_compra date,
    idproveedor integer
);
 !   DROP TABLE public.compra_insumo;
       public         heap    postgres    false            ?            1259    31376    compra_insumo_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.compra_insumo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.compra_insumo_id_seq;
       public          postgres    false    204            ?           0    0    compra_insumo_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.compra_insumo_id_seq OWNED BY public.compra_insumo.id;
          public          postgres    false    205            ?            1259    31378    detalle_compra_insumo    TABLE     ?   CREATE TABLE public.detalle_compra_insumo (
    id integer NOT NULL,
    cantidad integer,
    precio_unitario double precision,
    precio_total double precision,
    idinsumo integer,
    idcomprainsumo integer
);
 )   DROP TABLE public.detalle_compra_insumo;
       public         heap    postgres    false            ?            1259    31381    detalle_compra_insumo_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.detalle_compra_insumo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE public.detalle_compra_insumo_id_seq;
       public          postgres    false    206            ?           0    0    detalle_compra_insumo_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE public.detalle_compra_insumo_id_seq OWNED BY public.detalle_compra_insumo.id;
          public          postgres    false    207            ?            1259    31383    detalle_pedido    TABLE     ?   CREATE TABLE public.detalle_pedido (
    id integer NOT NULL,
    descripcion text,
    talla text,
    color text,
    cantidad integer,
    idpedido integer,
    idproducto integer
);
 "   DROP TABLE public.detalle_pedido;
       public         heap    postgres    false            ?            1259    31389    detalle_pedido_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.detalle_pedido_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.detalle_pedido_id_seq;
       public          postgres    false    208            ?           0    0    detalle_pedido_id_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.detalle_pedido_id_seq OWNED BY public.detalle_pedido.id;
          public          postgres    false    209            ?            1259    31391    detalle_venta    TABLE     ?   CREATE TABLE public.detalle_venta (
    id integer NOT NULL,
    idpedido integer,
    precio_total double precision,
    idventa integer,
    idproducto integer
);
 !   DROP TABLE public.detalle_venta;
       public         heap    postgres    false            ?            1259    31394    detalle_venta_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.detalle_venta_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.detalle_venta_id_seq;
       public          postgres    false    210            ?           0    0    detalle_venta_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.detalle_venta_id_seq OWNED BY public.detalle_venta.id;
          public          postgres    false    211            ?            1259    31396    distribuidora    TABLE     ?   CREATE TABLE public.distribuidora (
    id integer NOT NULL,
    nit integer,
    nombre text,
    pais text,
    departamento text,
    ciudad text,
    telefono integer,
    direccion text
);
 !   DROP TABLE public.distribuidora;
       public         heap    postgres    false            ?            1259    31402    distribuidora_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.distribuidora_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 +   DROP SEQUENCE public.distribuidora_id_seq;
       public          postgres    false    212            ?           0    0    distribuidora_id_seq    SEQUENCE OWNED BY     M   ALTER SEQUENCE public.distribuidora_id_seq OWNED BY public.distribuidora.id;
          public          postgres    false    213            ?            1259    31404    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            ?            1259    31411    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    214            ?           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    215            ?            1259    31413    insumo    TABLE     w   CREATE TABLE public.insumo (
    id integer NOT NULL,
    codigo text,
    nombre text,
    iddistribuidora integer
);
    DROP TABLE public.insumo;
       public         heap    postgres    false            ?            1259    31419    insumo_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.insumo_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.insumo_id_seq;
       public          postgres    false    216            ?           0    0    insumo_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.insumo_id_seq OWNED BY public.insumo.id;
          public          postgres    false    217            ?            1259    31421 
   inventario    TABLE     ?   CREATE TABLE public.inventario (
    id integer NOT NULL,
    stock_entrada integer,
    stock_salida integer,
    fecha date,
    idinsumo integer,
    idalmacen integer,
    stock integer
);
    DROP TABLE public.inventario;
       public         heap    postgres    false            ?            1259    31424    inventario_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.inventario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.inventario_id_seq;
       public          postgres    false    218            ?           0    0    inventario_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.inventario_id_seq OWNED BY public.inventario.id;
          public          postgres    false    219            ?            1259    31436 
   migrations    TABLE     ?   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            ?            1259    31439    migrations_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    221            ?           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    222            ?            1259    31441    password_resets    TABLE     ?   CREATE TABLE public.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 #   DROP TABLE public.password_resets;
       public         heap    postgres    false            ?            1259    31447    pedido    TABLE     ?   CREATE TABLE public.pedido (
    id integer NOT NULL,
    fecha_entrega date,
    lugar_entrega text,
    cantidad_total integer,
    idcliente integer
);
    DROP TABLE public.pedido;
       public         heap    postgres    false            ?            1259    31453    pedido_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.pedido_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.pedido_id_seq;
       public          postgres    false    224            ?           0    0    pedido_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.pedido_id_seq OWNED BY public.pedido.id;
          public          postgres    false    225            ?            1259    31426    persona    TABLE     H   CREATE TABLE public.persona (
    id integer NOT NULL,
    sexo text
);
    DROP TABLE public.persona;
       public         heap    postgres    false            ?            1259    31455    persona_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.persona_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.persona_id_seq;
       public          postgres    false    220            ?           0    0    persona_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.persona_id_seq OWNED BY public.persona.id;
          public          postgres    false    226            ?            1259    31457    personal_access_tokens    TABLE     ?  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            ?            1259    31463    personal_access_tokens_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    227            ?           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    228            ?            1259    31465 
   produccion    TABLE        CREATE TABLE public.produccion (
    id integer NOT NULL,
    fecha_inicio date,
    idpedido integer,
    idinsumo integer
);
    DROP TABLE public.produccion;
       public         heap    postgres    false            ?            1259    31468    produccion_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.produccion_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.produccion_id_seq;
       public          postgres    false    229            ?           0    0    produccion_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.produccion_id_seq OWNED BY public.produccion.id;
          public          postgres    false    230            ?            1259    31470    producto    TABLE     q   CREATE TABLE public.producto (
    id integer NOT NULL,
    nombre text,
    precio_unitario double precision
);
    DROP TABLE public.producto;
       public         heap    postgres    false            ?            1259    31476    producto_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.producto_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.producto_id_seq;
       public          postgres    false    231            ?           0    0    producto_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.producto_id_seq OWNED BY public.producto.id;
          public          postgres    false    232            ?            1259    31483    sessions    TABLE     ?   CREATE TABLE public.sessions (
    id character varying(255) NOT NULL,
    user_id bigint,
    ip_address character varying(45),
    user_agent text,
    payload text NOT NULL,
    last_activity integer NOT NULL
);
    DROP TABLE public.sessions;
       public         heap    postgres    false            ?            1259    31489    users    TABLE       CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    current_team_id bigint,
    profile_photo_path character varying(2048),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    two_factor_secret text,
    two_factor_recovery_codes text
);
    DROP TABLE public.users;
       public         heap    postgres    false            ?            1259    31495    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    234            ?           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    235            ?            1259    31727    v_detalle_pedido    VIEW     ?  CREATE VIEW public.v_detalle_pedido AS
 SELECT dp.id,
    dp.descripcion,
    dp.talla,
    dp.color,
    dp.cantidad,
    dp.idpedido,
    p.cantidad_total,
    dp.idproducto,
    pr.nombre,
    p.idcliente,
    cl.nombre AS cliente,
    cl.apellido
   FROM (((public.detalle_pedido dp
     JOIN public.pedido p ON ((dp.idpedido = p.id)))
     JOIN public.cliente cl ON ((p.idcliente = cl.id)))
     JOIN public.producto pr ON ((dp.idproducto = pr.id)))
  ORDER BY dp.id;
 #   DROP VIEW public.v_detalle_pedido;
       public          postgres    false    208    208    202    208    231    208    231    224    224    224    208    208    202    202    208            ?            1259    31502    venta    TABLE     o   CREATE TABLE public.venta (
    id integer NOT NULL,
    codigo text,
    fecha date,
    idcliente integer
);
    DROP TABLE public.venta;
       public         heap    postgres    false            ?            1259    31508    venta_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.venta_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.venta_id_seq;
       public          postgres    false    236            ?           0    0    venta_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.venta_id_seq OWNED BY public.venta.id;
          public          postgres    false    237            ?           2604    31552 
   almacen id    DEFAULT     h   ALTER TABLE ONLY public.almacen ALTER COLUMN id SET DEFAULT nextval('public.almacen_id_seq'::regclass);
 9   ALTER TABLE public.almacen ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    201    200            ?           2604    31553 
   cliente id    DEFAULT     h   ALTER TABLE ONLY public.cliente ALTER COLUMN id SET DEFAULT nextval('public.cliente_id_seq'::regclass);
 9   ALTER TABLE public.cliente ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    202            ?           2604    31554    compra_insumo id    DEFAULT     t   ALTER TABLE ONLY public.compra_insumo ALTER COLUMN id SET DEFAULT nextval('public.compra_insumo_id_seq'::regclass);
 ?   ALTER TABLE public.compra_insumo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    205    204            ?           2604    31555    detalle_compra_insumo id    DEFAULT     ?   ALTER TABLE ONLY public.detalle_compra_insumo ALTER COLUMN id SET DEFAULT nextval('public.detalle_compra_insumo_id_seq'::regclass);
 G   ALTER TABLE public.detalle_compra_insumo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    207    206            ?           2604    31556    detalle_pedido id    DEFAULT     v   ALTER TABLE ONLY public.detalle_pedido ALTER COLUMN id SET DEFAULT nextval('public.detalle_pedido_id_seq'::regclass);
 @   ALTER TABLE public.detalle_pedido ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    208            ?           2604    31557    detalle_venta id    DEFAULT     t   ALTER TABLE ONLY public.detalle_venta ALTER COLUMN id SET DEFAULT nextval('public.detalle_venta_id_seq'::regclass);
 ?   ALTER TABLE public.detalle_venta ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    211    210            ?           2604    31558    distribuidora id    DEFAULT     t   ALTER TABLE ONLY public.distribuidora ALTER COLUMN id SET DEFAULT nextval('public.distribuidora_id_seq'::regclass);
 ?   ALTER TABLE public.distribuidora ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    213    212            ?           2604    31559    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    215    214            ?           2604    31560 	   insumo id    DEFAULT     f   ALTER TABLE ONLY public.insumo ALTER COLUMN id SET DEFAULT nextval('public.insumo_id_seq'::regclass);
 8   ALTER TABLE public.insumo ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    216            ?           2604    31561    inventario id    DEFAULT     n   ALTER TABLE ONLY public.inventario ALTER COLUMN id SET DEFAULT nextval('public.inventario_id_seq'::regclass);
 <   ALTER TABLE public.inventario ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    219    218            ?           2604    31562    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    222    221            ?           2604    31563 	   pedido id    DEFAULT     f   ALTER TABLE ONLY public.pedido ALTER COLUMN id SET DEFAULT nextval('public.pedido_id_seq'::regclass);
 8   ALTER TABLE public.pedido ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    224            ?           2604    31564 
   persona id    DEFAULT     h   ALTER TABLE ONLY public.persona ALTER COLUMN id SET DEFAULT nextval('public.persona_id_seq'::regclass);
 9   ALTER TABLE public.persona ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    226    220            ?           2604    31565    personal_access_tokens id    DEFAULT     ?   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    227            ?           2604    31566    produccion id    DEFAULT     n   ALTER TABLE ONLY public.produccion ALTER COLUMN id SET DEFAULT nextval('public.produccion_id_seq'::regclass);
 <   ALTER TABLE public.produccion ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    230    229            ?           2604    31567    producto id    DEFAULT     j   ALTER TABLE ONLY public.producto ALTER COLUMN id SET DEFAULT nextval('public.producto_id_seq'::regclass);
 :   ALTER TABLE public.producto ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    232    231            ?           2604    31569    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    234            ?           2604    31570    venta id    DEFAULT     d   ALTER TABLE ONLY public.venta ALTER COLUMN id SET DEFAULT nextval('public.venta_id_seq'::regclass);
 7   ALTER TABLE public.venta ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    237    236            x          0    31360    almacen 
   TABLE DATA           -   COPY public.almacen (id, nombre) FROM stdin;
    public          postgres    false    200   ?       z          0    31368    cliente 
   TABLE DATA           K   COPY public.cliente (id, celular, idpersona, nombre, apellido) FROM stdin;
    public          postgres    false    202   B?       |          0    31373    compra_insumo 
   TABLE DATA           F   COPY public.compra_insumo (id, fecha_compra, idproveedor) FROM stdin;
    public          postgres    false    204   ~?       ~          0    31378    detalle_compra_insumo 
   TABLE DATA           v   COPY public.detalle_compra_insumo (id, cantidad, precio_unitario, precio_total, idinsumo, idcomprainsumo) FROM stdin;
    public          postgres    false    206   ??       ?          0    31383    detalle_pedido 
   TABLE DATA           g   COPY public.detalle_pedido (id, descripcion, talla, color, cantidad, idpedido, idproducto) FROM stdin;
    public          postgres    false    208   ??       ?          0    31391    detalle_venta 
   TABLE DATA           X   COPY public.detalle_venta (id, idpedido, precio_total, idventa, idproducto) FROM stdin;
    public          postgres    false    210   ˼       ?          0    31396    distribuidora 
   TABLE DATA           i   COPY public.distribuidora (id, nit, nombre, pais, departamento, ciudad, telefono, direccion) FROM stdin;
    public          postgres    false    212   7?       ?          0    31404    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    214   ֽ       ?          0    31413    insumo 
   TABLE DATA           E   COPY public.insumo (id, codigo, nombre, iddistribuidora) FROM stdin;
    public          postgres    false    216   ??       ?          0    31421 
   inventario 
   TABLE DATA           h   COPY public.inventario (id, stock_entrada, stock_salida, fecha, idinsumo, idalmacen, stock) FROM stdin;
    public          postgres    false    218   \?       ?          0    31436 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    221   ??       ?          0    31441    password_resets 
   TABLE DATA           C   COPY public.password_resets (email, token, created_at) FROM stdin;
    public          postgres    false    223   T?       ?          0    31447    pedido 
   TABLE DATA           ]   COPY public.pedido (id, fecha_entrega, lugar_entrega, cantidad_total, idcliente) FROM stdin;
    public          postgres    false    224   q?       ?          0    31426    persona 
   TABLE DATA           +   COPY public.persona (id, sexo) FROM stdin;
    public          postgres    false    220   J?       ?          0    31457    personal_access_tokens 
   TABLE DATA           ?   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, created_at, updated_at) FROM stdin;
    public          postgres    false    227   {?       ?          0    31465 
   produccion 
   TABLE DATA           J   COPY public.produccion (id, fecha_inicio, idpedido, idinsumo) FROM stdin;
    public          postgres    false    229   ??       ?          0    31470    producto 
   TABLE DATA           ?   COPY public.producto (id, nombre, precio_unitario) FROM stdin;
    public          postgres    false    231   ?       ?          0    31483    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public          postgres    false    233   ??       ?          0    31489    users 
   TABLE DATA           ?   COPY public.users (id, name, email, email_verified_at, password, remember_token, current_team_id, profile_photo_path, created_at, updated_at, two_factor_secret, two_factor_recovery_codes) FROM stdin;
    public          postgres    false    234   ??       ?          0    31502    venta 
   TABLE DATA           =   COPY public.venta (id, codigo, fecha, idcliente) FROM stdin;
    public          postgres    false    236   y?       ?           0    0    almacen_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.almacen_id_seq', 1, false);
          public          postgres    false    201            ?           0    0    cliente_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.cliente_id_seq', 16, true);
          public          postgres    false    203            ?           0    0    compra_insumo_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.compra_insumo_id_seq', 1, false);
          public          postgres    false    205            ?           0    0    detalle_compra_insumo_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public.detalle_compra_insumo_id_seq', 1, false);
          public          postgres    false    207            ?           0    0    detalle_pedido_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.detalle_pedido_id_seq', 37, true);
          public          postgres    false    209            ?           0    0    detalle_venta_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.detalle_venta_id_seq', 11, true);
          public          postgres    false    211            ?           0    0    distribuidora_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.distribuidora_id_seq', 1, false);
          public          postgres    false    213            ?           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    215            ?           0    0    insumo_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.insumo_id_seq', 1, false);
          public          postgres    false    217            ?           0    0    inventario_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.inventario_id_seq', 1, false);
          public          postgres    false    219            ?           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 12, true);
          public          postgres    false    222            ?           0    0    pedido_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.pedido_id_seq', 33, true);
          public          postgres    false    225            ?           0    0    persona_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.persona_id_seq', 15, true);
          public          postgres    false    226            ?           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    228            ?           0    0    produccion_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.produccion_id_seq', 11, true);
          public          postgres    false    230            ?           0    0    producto_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.producto_id_seq', 7, true);
          public          postgres    false    232            ?           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 1, true);
          public          postgres    false    235            ?           0    0    venta_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.venta_id_seq', 13, true);
          public          postgres    false    237            ?           2606    31572    almacen almacen_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.almacen
    ADD CONSTRAINT almacen_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.almacen DROP CONSTRAINT almacen_pkey;
       public            postgres    false    200            ?           2606    31574    cliente cliente_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT cliente_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.cliente DROP CONSTRAINT cliente_pkey;
       public            postgres    false    202            ?           2606    31576     compra_insumo compra_insumo_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.compra_insumo
    ADD CONSTRAINT compra_insumo_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.compra_insumo DROP CONSTRAINT compra_insumo_pkey;
       public            postgres    false    204            ?           2606    31578 0   detalle_compra_insumo detalle_compra_insumo_pkey 
   CONSTRAINT     n   ALTER TABLE ONLY public.detalle_compra_insumo
    ADD CONSTRAINT detalle_compra_insumo_pkey PRIMARY KEY (id);
 Z   ALTER TABLE ONLY public.detalle_compra_insumo DROP CONSTRAINT detalle_compra_insumo_pkey;
       public            postgres    false    206            ?           2606    31580 "   detalle_pedido detalle_pedido_pkey 
   CONSTRAINT     `   ALTER TABLE ONLY public.detalle_pedido
    ADD CONSTRAINT detalle_pedido_pkey PRIMARY KEY (id);
 L   ALTER TABLE ONLY public.detalle_pedido DROP CONSTRAINT detalle_pedido_pkey;
       public            postgres    false    208            ?           2606    31582     detalle_venta detalle_venta_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.detalle_venta
    ADD CONSTRAINT detalle_venta_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.detalle_venta DROP CONSTRAINT detalle_venta_pkey;
       public            postgres    false    210            ?           2606    31584     distribuidora distribuidora_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.distribuidora
    ADD CONSTRAINT distribuidora_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.distribuidora DROP CONSTRAINT distribuidora_pkey;
       public            postgres    false    212            ?           2606    31586    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    214            ?           2606    31588 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    214            ?           2606    31590    insumo insumo_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.insumo
    ADD CONSTRAINT insumo_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.insumo DROP CONSTRAINT insumo_pkey;
       public            postgres    false    216            ?           2606    31592    inventario inventario_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.inventario
    ADD CONSTRAINT inventario_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.inventario DROP CONSTRAINT inventario_pkey;
       public            postgres    false    218            ?           2606    31594    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    221            ?           2606    31596    pedido pedido_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.pedido
    ADD CONSTRAINT pedido_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.pedido DROP CONSTRAINT pedido_pkey;
       public            postgres    false    224            ?           2606    31598    persona persona_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.persona
    ADD CONSTRAINT persona_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.persona DROP CONSTRAINT persona_pkey;
       public            postgres    false    220            ?           2606    31600 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    227            ?           2606    31602 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    227            ?           2606    31604    produccion produccion_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.produccion
    ADD CONSTRAINT produccion_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.produccion DROP CONSTRAINT produccion_pkey;
       public            postgres    false    229            ?           2606    31606    producto producto_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.producto
    ADD CONSTRAINT producto_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.producto DROP CONSTRAINT producto_pkey;
       public            postgres    false    231            ?           2606    31610    sessions sessions_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sessions DROP CONSTRAINT sessions_pkey;
       public            postgres    false    233            ?           2606    31612    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    234            ?           2606    31614    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    234            ?           2606    31616    venta venta_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.venta
    ADD CONSTRAINT venta_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.venta DROP CONSTRAINT venta_pkey;
       public            postgres    false    236            ?           1259    31617    password_resets_email_index    INDEX     X   CREATE INDEX password_resets_email_index ON public.password_resets USING btree (email);
 /   DROP INDEX public.password_resets_email_index;
       public            postgres    false    223            ?           1259    31618 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     ?   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    227    227            ?           1259    31619    sessions_last_activity_index    INDEX     Z   CREATE INDEX sessions_last_activity_index ON public.sessions USING btree (last_activity);
 0   DROP INDEX public.sessions_last_activity_index;
       public            postgres    false    233            ?           1259    31620    sessions_user_id_index    INDEX     N   CREATE INDEX sessions_user_id_index ON public.sessions USING btree (user_id);
 *   DROP INDEX public.sessions_user_id_index;
       public            postgres    false    233            ?           2606    31623    inventario idalmacen_fkey    FK CONSTRAINT     |   ALTER TABLE ONLY public.inventario
    ADD CONSTRAINT idalmacen_fkey FOREIGN KEY (idalmacen) REFERENCES public.almacen(id);
 C   ALTER TABLE ONLY public.inventario DROP CONSTRAINT idalmacen_fkey;
       public          postgres    false    218    2998    200            ?           2606    31628    pedido idcliente_fkey    FK CONSTRAINT     x   ALTER TABLE ONLY public.pedido
    ADD CONSTRAINT idcliente_fkey FOREIGN KEY (idcliente) REFERENCES public.cliente(id);
 ?   ALTER TABLE ONLY public.pedido DROP CONSTRAINT idcliente_fkey;
       public          postgres    false    202    3000    224            ?           2606    31633    venta idcliente_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.venta
    ADD CONSTRAINT idcliente_fkey FOREIGN KEY (idcliente) REFERENCES public.cliente(id) NOT VALID;
 >   ALTER TABLE ONLY public.venta DROP CONSTRAINT idcliente_fkey;
       public          postgres    false    202    3000    236            ?           2606    31638 )   detalle_compra_insumo idcomprainsumo_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.detalle_compra_insumo
    ADD CONSTRAINT idcomprainsumo_fkey FOREIGN KEY (idcomprainsumo) REFERENCES public.compra_insumo(id);
 S   ALTER TABLE ONLY public.detalle_compra_insumo DROP CONSTRAINT idcomprainsumo_fkey;
       public          postgres    false    204    206    3002            ?           2606    31643 )   detalle_compra_insumo idcomprainsumo_kfey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.detalle_compra_insumo
    ADD CONSTRAINT idcomprainsumo_kfey FOREIGN KEY (idcomprainsumo) REFERENCES public.compra_insumo(id) NOT VALID;
 S   ALTER TABLE ONLY public.detalle_compra_insumo DROP CONSTRAINT idcomprainsumo_kfey;
       public          postgres    false    206    3002    204            ?           2606    31653    insumo iddistribuidora_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.insumo
    ADD CONSTRAINT iddistribuidora_fkey FOREIGN KEY (iddistribuidora) REFERENCES public.distribuidora(id) NOT VALID;
 E   ALTER TABLE ONLY public.insumo DROP CONSTRAINT iddistribuidora_fkey;
       public          postgres    false    216    212    3010            ?           2606    31663    produccion idinsumo_fkey    FK CONSTRAINT     y   ALTER TABLE ONLY public.produccion
    ADD CONSTRAINT idinsumo_fkey FOREIGN KEY (idinsumo) REFERENCES public.insumo(id);
 B   ALTER TABLE ONLY public.produccion DROP CONSTRAINT idinsumo_fkey;
       public          postgres    false    216    3016    229            ?           2606    31668 #   detalle_compra_insumo idinsumo_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.detalle_compra_insumo
    ADD CONSTRAINT idinsumo_fkey FOREIGN KEY (idinsumo) REFERENCES public.insumo(id);
 M   ALTER TABLE ONLY public.detalle_compra_insumo DROP CONSTRAINT idinsumo_fkey;
       public          postgres    false    3016    216    206            ?           2606    31673    inventario idinsumo_fkey    FK CONSTRAINT     y   ALTER TABLE ONLY public.inventario
    ADD CONSTRAINT idinsumo_fkey FOREIGN KEY (idinsumo) REFERENCES public.insumo(id);
 B   ALTER TABLE ONLY public.inventario DROP CONSTRAINT idinsumo_fkey;
       public          postgres    false    216    3016    218            ?           2606    31678    detalle_venta idpedido_fkey    FK CONSTRAINT     |   ALTER TABLE ONLY public.detalle_venta
    ADD CONSTRAINT idpedido_fkey FOREIGN KEY (idpedido) REFERENCES public.pedido(id);
 E   ALTER TABLE ONLY public.detalle_venta DROP CONSTRAINT idpedido_fkey;
       public          postgres    false    224    3025    210            ?           2606    31683    produccion idpedido_fkey    FK CONSTRAINT     y   ALTER TABLE ONLY public.produccion
    ADD CONSTRAINT idpedido_fkey FOREIGN KEY (idpedido) REFERENCES public.pedido(id);
 B   ALTER TABLE ONLY public.produccion DROP CONSTRAINT idpedido_fkey;
       public          postgres    false    224    3025    229            ?           2606    31688    detalle_pedido idpedido_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.detalle_pedido
    ADD CONSTRAINT idpedido_fkey FOREIGN KEY (idpedido) REFERENCES public.pedido(id) NOT VALID;
 F   ALTER TABLE ONLY public.detalle_pedido DROP CONSTRAINT idpedido_fkey;
       public          postgres    false    3025    224    208            ?           2606    31693    cliente idpersona_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.cliente
    ADD CONSTRAINT idpersona_fkey FOREIGN KEY (idpersona) REFERENCES public.persona(id) NOT VALID;
 @   ALTER TABLE ONLY public.cliente DROP CONSTRAINT idpersona_fkey;
       public          postgres    false    220    3020    202            ?           2606    31703    detalle_venta idproducto_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.detalle_venta
    ADD CONSTRAINT idproducto_fkey FOREIGN KEY (idproducto) REFERENCES public.producto(id);
 G   ALTER TABLE ONLY public.detalle_venta DROP CONSTRAINT idproducto_fkey;
       public          postgres    false    210    231    3034            ?           2606    31708    detalle_pedido idproducto_fkey    FK CONSTRAINT     ?   ALTER TABLE ONLY public.detalle_pedido
    ADD CONSTRAINT idproducto_fkey FOREIGN KEY (idproducto) REFERENCES public.producto(id) NOT VALID;
 H   ALTER TABLE ONLY public.detalle_pedido DROP CONSTRAINT idproducto_fkey;
       public          postgres    false    208    3034    231            ?           2606    31718    detalle_venta idventa_fkey    FK CONSTRAINT     y   ALTER TABLE ONLY public.detalle_venta
    ADD CONSTRAINT idventa_fkey FOREIGN KEY (idventa) REFERENCES public.venta(id);
 D   ALTER TABLE ONLY public.detalle_venta DROP CONSTRAINT idventa_fkey;
       public          postgres    false    3044    210    236            x   "   x?3?t??MLN?SHIU??+.??/?????? m??      z   ,  x?MPKk1>O~L???G-iK?????	d?B???,?K`>?'??Z?^f*p?-ޅZ?VJ??!???6?'??K?#?
k:?0?0??{j?`]˭?F?????n????)](ex?cK???xm???w?7??Lg?
A?5??4?']k#?;?{?nϵ?)?G???`?v)?>R?T??C??eQ?f?H?w{?r?f.????pM-???4?P??gj,??$?'A? ?a?kќ? ?T???8?j7?>ء??D?O??Y??2?ǿ&?`?(ݺ????ӕZ??k_OB???r?      |   %   x?3?4202?54?50?4?2B?q#s??b???? ???      ~   /   x?Ǳ 0???0??d?9B???`a?a??]	???v? |???3?      ?   ?  x?}SAn?0<_?")J?1??
?zȅQׅ,r?C_?Y????͉??????R?-?a??kx??????c?ᠡ?A?p?l???????s???C?00??????aw?0???V?㮄?U???W *8??????nY&H?s?i?ZE|n,???P???_????A?Z?Fr̒?q?????F????}??0??(???*a??_?~<?k_jai?\??m??Z<N?d??΍nhl:iݐV	???)[???????D3i?D????$BJo???'???4?????SsK1??|a?-??]Z?26??xY<2??UIɿ???<?J??fjT?$	?I?Y???L?????ec??K0e{ϱ~??pJ[&g򖲨?l#n??????xSE?????yq??V?zI3n??:??/8?'E?V(?????u?%????????݋K?;?X??I)?	?)      ?   \   x??? 1B?PL&?b???_??A?#Q[j\L$??????i?h6??Vpq?[p?<<??Sb??A?\?)?3??؊?9%????H????      ?   ?   x?}ͱ
?0????y?]?4kgEpu9j?@?0%?ޢ?????# ??$3?e???????????u.|Ȼa??s?zm}.???3d?=?d?Z?.?56.??˒??H??>?EJ??T?$K?;?6*o????????@]      ?      x?????? ? ?      ?   Y   x?3?4400?I?IT???L-.I-?4?2?AăSS?B? !S??cNz~J~?1?1HԘ3,?89?8?ӈ?$`?铘???qqq ?l      ?   7   x?]ȱ 0?9?BE|?????V<Zh?3<?h?nN??BM?????9}??=?F      ?   ?   x?]???0E??ǘuA?1i?VtR????nu؇>?s??4FC?????L?q?"&=7?????7	GN?e??+??Mp"?$??>???_?"?{,??7????MƊ??/?ڝ???,y$k9??;/?j?j P??????????R?דR??`?      ?      x?????? ? ?      ?   ?  x?m??n?0E?3_A?k????Ru?EQ?M?lX?0?b [@??#??????2?L+?+m??t??n<?g{:FC????^?b??Nm?? ?????u????}??2?y?7??"V? G?&??֋`?`qh??????g7Lq???_E%V???wj?? ?Pa?Hl? ????ww??i 5P2?=J~??J?J3<8???Gi3("R_$K! !?)xK???o?b$s?Ɲ?V?f??OH???*=??ņe???@Mߵn?f??u??yx))??N??6j30-?b̓;?Fpw"?9_=?,?eua???#???m<?;??I 	?j?B??Y???)??b?r???::oՋ?7{?bR?v{~?{ۻ???jA
?-??9?hu?=?Q???89	Y1Yb`?i?93?=?????΁?w?ml;zy??c{qm/^??CfY????
|???? ????      ?   !   x?3?tK?M?????2??M,N.??c???? |?      ?      x?????? ? ?      ?   Y   x?U?Q
?0?os?????e???R???>??l???n?°V? >ЪD?D*q???n?%f??????b?X?A?????????<o      ?   o   x?M?;?0???)rd????j:ɒ???GTP??p?????p??%5?(m???l???y?w?(#?fK??$??[?o~?>?k??$??ĺ???????'$      ?   T  x?mR?s?0??_???ٱ|H,?كTԐ
&?$XAh?????wrx?????|Y?????#??^??k?????WJ???V??}?=hM??Ty???<y1G??????⅊&?o?l???҃??2m???a?./?1@yZ/C???pVf?"K??Y???u??Xw?1???DS???|?[?::]*0p????0w??Z?v???
?????xy,+iWt??? %??ӟIL"?/?H??]?̂?c?DluL?+N+~?{Ȑ? 6???3-?:?????U???????E??ٸ?@???3?#?ߐ???万?+j??????-.9*\?=?jv???oo*{??%?ɩ?%?vү??????????c???x?CAr??X?7R?2GC?{%????0?8???m"?߹T8w_?'???\????L?=?[?݇WOjr???????K???S???U??ڴ???޵???&j??jn???q?aZ?z??5t?-"?FS???o0?/???Y?et?:???!???T?0????i??/s?.?j??>'W`?;o??? ???[?y%??	?+???6(??q???mQ??????Uc?????H?x      ?   ?   x?3?tL????,.)JL?/?L??s3s???s9c?8U?*UT2?<J?,?=?-L<}?󊌓?s?????}L??-?S3}??̪??\?,R?K,SA?!????P??P??B?????????X5W? ??*      ?   _   x?MϹ?0C?Z?Ł(߻d?9b????#?tZx?ЋW#B?UV?U4Y???e=[?????lf[X?um?Ė?k?6??$????W?????9$?     