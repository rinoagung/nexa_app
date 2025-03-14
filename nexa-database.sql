PGDMP                      }            nexa_app    17.0    17.0 /    "           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                           false            #           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                           false            $           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                           false            %           1262    19900    nexa_app    DATABASE        CREATE DATABASE nexa_app WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_Indonesia.1252';
    DROP DATABASE nexa_app;
                     Rino A    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
                     pg_database_owner    false            &           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                        pg_database_owner    false    4            �            1259    20325    blogs    TABLE     (  CREATE TABLE public.blogs (
    id bigint NOT NULL,
    judul_blog character varying(255) NOT NULL,
    excerpt text NOT NULL,
    deskripsi text NOT NULL,
    gambar character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.blogs;
       public         heap r       postgres    false    4            �            1259    20324    blogs_id_seq    SEQUENCE     u   CREATE SEQUENCE public.blogs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.blogs_id_seq;
       public               postgres    false    4    227            '           0    0    blogs_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.blogs_id_seq OWNED BY public.blogs.id;
          public               postgres    false    226            �            1259    20316 
   categories    TABLE       CREATE TABLE public.categories (
    id bigint NOT NULL,
    nama_kategori character varying(255) NOT NULL,
    deskripsi text NOT NULL,
    gambar character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.categories;
       public         heap r       postgres    false    4            �            1259    20315    categories_id_seq    SEQUENCE     z   CREATE SEQUENCE public.categories_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.categories_id_seq;
       public               postgres    false    225    4            (           0    0    categories_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.categories_id_seq OWNED BY public.categories.id;
          public               postgres    false    224            �            1259    20280 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap r       postgres    false    4            �            1259    20279    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public               postgres    false    4    218            )           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public               postgres    false    217            �            1259    20307    products    TABLE     �  CREATE TABLE public.products (
    id bigint NOT NULL,
    category_id bigint NOT NULL,
    nama_produk character varying(255) NOT NULL,
    gambar character varying(255) NOT NULL,
    deskripsi text NOT NULL,
    harga integer NOT NULL,
    stok integer NOT NULL,
    total_jual integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.products;
       public         heap r       postgres    false    4            �            1259    20306    products_id_seq    SEQUENCE     x   CREATE SEQUENCE public.products_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.products_id_seq;
       public               postgres    false    4    223            *           0    0    products_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;
          public               postgres    false    222            �            1259    20297    sessions    TABLE     �   CREATE TABLE public.sessions (
    id character varying(255) NOT NULL,
    user_id bigint,
    ip_address character varying(45),
    user_agent text,
    payload text NOT NULL,
    last_activity integer NOT NULL
);
    DROP TABLE public.sessions;
       public         heap r       postgres    false    4            �            1259    20287    users    TABLE     x  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap r       postgres    false    4            �            1259    20286    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public               postgres    false    4    220            +           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public               postgres    false    219            s           2604    20328    blogs id    DEFAULT     d   ALTER TABLE ONLY public.blogs ALTER COLUMN id SET DEFAULT nextval('public.blogs_id_seq'::regclass);
 7   ALTER TABLE public.blogs ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    226    227    227            r           2604    20319    categories id    DEFAULT     n   ALTER TABLE ONLY public.categories ALTER COLUMN id SET DEFAULT nextval('public.categories_id_seq'::regclass);
 <   ALTER TABLE public.categories ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    224    225    225            o           2604    20283    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    218    217    218            q           2604    20310    products id    DEFAULT     j   ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);
 :   ALTER TABLE public.products ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    222    223    223            p           2604    20290    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public               postgres    false    220    219    220                      0    20325    blogs 
   TABLE DATA           c   COPY public.blogs (id, judul_blog, excerpt, deskripsi, gambar, created_at, updated_at) FROM stdin;
    public               postgres    false    227   �4                 0    20316 
   categories 
   TABLE DATA           b   COPY public.categories (id, nama_kategori, deskripsi, gambar, created_at, updated_at) FROM stdin;
    public               postgres    false    225   r8                 0    20280 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public               postgres    false    218   l9                 0    20307    products 
   TABLE DATA           �   COPY public.products (id, category_id, nama_produk, gambar, deskripsi, harga, stok, total_jual, created_at, updated_at) FROM stdin;
    public               postgres    false    223   �9                 0    20297    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public               postgres    false    221   �;                 0    20287    users 
   TABLE DATA           u   COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    public               postgres    false    220   d=       ,           0    0    blogs_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.blogs_id_seq', 5, true);
          public               postgres    false    226            -           0    0    categories_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.categories_id_seq', 4, true);
          public               postgres    false    224            .           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 4, true);
          public               postgres    false    217            /           0    0    products_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.products_id_seq', 10, true);
          public               postgres    false    222            0           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 1, false);
          public               postgres    false    219            �           2606    20332    blogs blogs_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.blogs
    ADD CONSTRAINT blogs_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.blogs DROP CONSTRAINT blogs_pkey;
       public                 postgres    false    227            �           2606    20323    categories categories_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.categories
    ADD CONSTRAINT categories_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.categories DROP CONSTRAINT categories_pkey;
       public                 postgres    false    225            u           2606    20285    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public                 postgres    false    218                       2606    20314    products products_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.products DROP CONSTRAINT products_pkey;
       public                 postgres    false    223            |           2606    20303    sessions sessions_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sessions DROP CONSTRAINT sessions_pkey;
       public                 postgres    false    221            w           2606    20296    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public                 postgres    false    220            y           2606    20294    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public                 postgres    false    220            z           1259    20305    sessions_last_activity_index    INDEX     Z   CREATE INDEX sessions_last_activity_index ON public.sessions USING btree (last_activity);
 0   DROP INDEX public.sessions_last_activity_index;
       public                 postgres    false    221            }           1259    20304    sessions_user_id_index    INDEX     N   CREATE INDEX sessions_user_id_index ON public.sessions USING btree (user_id);
 *   DROP INDEX public.sessions_user_id_index;
       public                 postgres    false    221               |  x��U]o�J}v~�� b%4iu�fں\�V)���^[�ѫ��;���+U7�6�gv�3s������e�w����~��Lfʒ
e���S� 4����j�]O�[~
m�,��V�*��zek�$+,�a)��/o|Z�R���y2���9Tw�,�3�
J��p�ֲW���2���c2C�� m�"�J��T�����_*S��k9���
ʰyt�ڤ��ס-��io�dz3����^��7����?�|�ӻ�i���W����ʼJK�!.N�Z�-�g��%!~a��&��aI��V�z�%Y)�-�!���4���)��� ��f)&��ld.� ~8S�Xl��0�:H�S��yf~z�'s�iC�1������X�
�T}�תAs��$��2����w�!Yf��Y���e�rX̷���.[��8���r�����؍�u�,bbQY�`h<uL� QSU��%�ys�;�(�)'z�����&1N�ǜ�#�q}����(�b�1�f����Ƣkȵ���f©Z7F]\�H��i������\s��ǖ�XY^���]��%���l��Z�C���q5��Y�V��,<�ĩ#c3�p6�/�-7eg��E�C(����>��K����ӈ�t��a&�-1�m�y6�4�Z�Q	/Gv:pse:�,��wn�Ô㊟;�y��f.b�c���<����O���/�{_��Of���Y�%��l�����.�W���e�c���X�Nq�@�����]/�"N�����w.�?f)�h_<,��P�W��{��}'|��3�4��!��*�4�Kl�*�
��z�gŒ��©��K�X�t��ݻ��^]]��Q�H         �   x���?k�0��Y�7u����l!(����]��ت,����o_ǅBow7�Û�צ�����s�r�$�4<�"-t!iB/�"LCNh����A�?�t2=+���d�&��ڕ�.{��l���}���N���Y��w������n!�U䖝:��?���D�)CL���ꊸb���=C�EܮK���W|��ɹωv1ao4"�9R#L�"����4I�o���L         _   x�3�4000��"0�O.JM,I�/-N-*�/IL�I�4�2�PhS�����
Wh����0+?	a�	����i<P�����ȁ������P���� (�0�           x���ю�0���S�fLA�;����8ugn6���N��n���)��d�p� ����|�#y��۔��9�{����@R]V\�3͹:���jK��P��x���;k��c�Ȅ�����3ʂ�q�Ģ���O|/�u�į�>�(vp���XI+��;q��pa�q�'��!Fb�L�q`\�q.vB�T�K�@�g�O`���*���(��?q�	ߍ�I7�u��t���%�`����@Ó֝�<������謥x���7g� �3�;}�g7����R[5�7��+4�R�h�\�)	�?D��x���d7
x��n>�8	h[�����6�u%� �`_��q�̳x�E��� υ�1��@P0��<pp��޻�J<�-�߲'��P�h�3\�pMe%
��;9��M�R�|�_�<�o����O���s{ħ:���F�#�,���c$���NS��W����&��,��X�Mp��hD��I�P���E�Ňww�k8���\         e  x�5�I��@���+���D�Y�'#.8���/Р46�q�_?�:y��|���4"����XEM�T$,{��a����b4�n��ZB�އ�!�"h}������.@�=��������E$^}��@S���A�s�����y��EL�k�'�(���1��7"n������l	F�]D��YS@b<�U�;�`�;�^�n���:����֦s�����ي�������O^����K��'�	��)&���kZ���B0i6��S/�xU+�����*�b��db��������A�aˡ��y4�5����-�ki�7���V3ޙ�W�}dHHWCU!��C�������            x������ � �     