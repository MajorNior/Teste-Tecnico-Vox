--
-- PostgreSQL database dump
--

-- Dumped from database version 16.2
-- Dumped by pg_dump version 16.2

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: notify_messenger_messages(); Type: FUNCTION; Schema: public; Owner: postgres
--

CREATE FUNCTION public.notify_messenger_messages() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
            BEGIN
                PERFORM pg_notify('messenger_messages', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$;


ALTER FUNCTION public.notify_messenger_messages() OWNER TO postgres;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: doctrine_migration_versions; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.doctrine_migration_versions (
    version character varying(191) NOT NULL,
    executed_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    execution_time integer
);


ALTER TABLE public.doctrine_migration_versions OWNER TO postgres;

--
-- Name: empresa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.empresa (
    id integer NOT NULL,
    nome_empresa character varying(255) NOT NULL
);


ALTER TABLE public.empresa OWNER TO postgres;

--
-- Name: empresa_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.empresa_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.empresa_id_seq OWNER TO postgres;

--
-- Name: messenger_messages; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.messenger_messages (
    id bigint NOT NULL,
    body text NOT NULL,
    headers text NOT NULL,
    queue_name character varying(190) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    available_at timestamp(0) without time zone NOT NULL,
    delivered_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone
);


ALTER TABLE public.messenger_messages OWNER TO postgres;

--
-- Name: COLUMN messenger_messages.created_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.messenger_messages.created_at IS '(DC2Type:datetime_immutable)';


--
-- Name: COLUMN messenger_messages.available_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.messenger_messages.available_at IS '(DC2Type:datetime_immutable)';


--
-- Name: COLUMN messenger_messages.delivered_at; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.messenger_messages.delivered_at IS '(DC2Type:datetime_immutable)';


--
-- Name: messenger_messages_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.messenger_messages_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.messenger_messages_id_seq OWNER TO postgres;

--
-- Name: messenger_messages_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.messenger_messages_id_seq OWNED BY public.messenger_messages.id;


--
-- Name: socios; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.socios (
    id integer NOT NULL,
    nome_socio character varying(255) NOT NULL
);


ALTER TABLE public.socios OWNER TO postgres;

--
-- Name: socios_empresa; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.socios_empresa (
    socios_id integer NOT NULL,
    empresa_id integer NOT NULL
);


ALTER TABLE public.socios_empresa OWNER TO postgres;

--
-- Name: socios_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.socios_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.socios_id_seq OWNER TO postgres;

--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuario (
    id integer NOT NULL,
    username character varying(180) NOT NULL,
    roles json NOT NULL,
    password character varying(255) NOT NULL,
    nome character varying(255) NOT NULL
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuario_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.usuario_id_seq OWNER TO postgres;

--
-- Name: messenger_messages id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages ALTER COLUMN id SET DEFAULT nextval('public.messenger_messages_id_seq'::regclass);


--
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
DoctrineMigrations\\Version20240306135242	2024-03-06 15:37:18	3
DoctrineMigrations\\Version20240306135453	2024-03-06 15:37:18	0
DoctrineMigrations\\Version20240306135534	2024-03-06 15:37:18	0
DoctrineMigrations\\Version20240306143536	2024-03-06 15:37:18	32
DoctrineMigrations\\Version20240307000449	2024-03-07 01:05:12	143
DoctrineMigrations\\Version20240307000726	2024-03-07 01:07:37	3
DoctrineMigrations\\Version20240307001557	2024-03-07 01:16:04	29
DoctrineMigrations\\Version20240307001909	2024-03-07 01:19:15	3
DoctrineMigrations\\Version20240307002319	2024-03-07 01:23:25	3
DoctrineMigrations\\Version20240307005940	2024-03-07 02:00:04	22
\.


--
-- Data for Name: empresa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.empresa (id, nome_empresa) FROM stdin;
42	empresa1
43	empresa2
44	empresa3
45	empresa4
46	empresa5
47	empresa6
48	empresa7
49	empresa8
50	empresa9
51	empresa10
\.


--
-- Data for Name: messenger_messages; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.messenger_messages (id, body, headers, queue_name, created_at, available_at, delivered_at) FROM stdin;
\.


--
-- Data for Name: socios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.socios (id, nome_socio) FROM stdin;
16	socio1
17	socio2
18	socio3
19	socio4
20	socio5
21	socio6
22	socio7
23	socio8
24	socio9
25	socio10
26	socio11
\.


--
-- Data for Name: socios_empresa; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.socios_empresa (socios_id, empresa_id) FROM stdin;
16	42
17	43
18	44
19	45
20	46
21	47
22	48
23	49
24	50
25	51
26	42
26	43
26	44
26	45
26	46
26	47
26	48
26	49
26	50
26	51
\.


--
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.usuario (id, username, roles, password, nome) FROM stdin;
2	admin	["ROLE_ADMIN"]	$2y$13$IOo5cZvBy3BsNTeRJeTbfed3wHVvvwBY/3Yv3ZBIJFx38DRT3OH1.	admin
4	usuario	["ROLE_USER"]	$2y$13$DTj9/qal/TpJB/lD/fqd6eO37MgqWJo.5uldv7rQPxdLfImFh.I8S	usuario
\.


--
-- Name: empresa_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.empresa_id_seq', 53, true);


--
-- Name: messenger_messages_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.messenger_messages_id_seq', 1, false);


--
-- Name: socios_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.socios_id_seq', 26, true);


--
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuario_id_seq', 4, true);


--
-- Name: doctrine_migration_versions doctrine_migration_versions_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);


--
-- Name: empresa empresa_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.empresa
    ADD CONSTRAINT empresa_pkey PRIMARY KEY (id);


--
-- Name: messenger_messages messenger_messages_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.messenger_messages
    ADD CONSTRAINT messenger_messages_pkey PRIMARY KEY (id);


--
-- Name: socios_empresa socios_empresa_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.socios_empresa
    ADD CONSTRAINT socios_empresa_pkey PRIMARY KEY (socios_id, empresa_id);


--
-- Name: socios socios_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.socios
    ADD CONSTRAINT socios_pkey PRIMARY KEY (id);


--
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


--
-- Name: idx_5a1c32de48a1a28f; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_5a1c32de48a1a28f ON public.socios_empresa USING btree (socios_id);


--
-- Name: idx_5a1c32de521e1991; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_5a1c32de521e1991 ON public.socios_empresa USING btree (empresa_id);


--
-- Name: idx_75ea56e016ba31db; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e016ba31db ON public.messenger_messages USING btree (delivered_at);


--
-- Name: idx_75ea56e0e3bd61ce; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0e3bd61ce ON public.messenger_messages USING btree (available_at);


--
-- Name: idx_75ea56e0fb7336f0; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_75ea56e0fb7336f0 ON public.messenger_messages USING btree (queue_name);


--
-- Name: uniq_identifier_username; Type: INDEX; Schema: public; Owner: postgres
--

CREATE UNIQUE INDEX uniq_identifier_username ON public.usuario USING btree (username);


--
-- Name: messenger_messages notify_trigger; Type: TRIGGER; Schema: public; Owner: postgres
--

CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON public.messenger_messages FOR EACH ROW EXECUTE FUNCTION public.notify_messenger_messages();


--
-- Name: socios_empresa fk_5a1c32de48a1a28f; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.socios_empresa
    ADD CONSTRAINT fk_5a1c32de48a1a28f FOREIGN KEY (socios_id) REFERENCES public.socios(id) ON DELETE CASCADE;


--
-- Name: socios_empresa fk_5a1c32de521e1991; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.socios_empresa
    ADD CONSTRAINT fk_5a1c32de521e1991 FOREIGN KEY (empresa_id) REFERENCES public.empresa(id) ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

