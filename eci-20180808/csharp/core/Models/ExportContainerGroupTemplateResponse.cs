// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Eci20180808.Models
{
    public class ExportContainerGroupTemplateResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Template")]
        [Validation(Required=true)]
        public ExportContainerGroupTemplateResponseTemplate Template { get; set; }
        public class ExportContainerGroupTemplateResponseTemplate : TeaModel {
            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }
            [NameInMap("ZoneId")]
            [Validation(Required=true)]
            public string ZoneId { get; set; }
            [NameInMap("SecurityGroupId")]
            [Validation(Required=true)]
            public string SecurityGroupId { get; set; }
            [NameInMap("VSwitchId")]
            [Validation(Required=true)]
            public string VSwitchId { get; set; }
            [NameInMap("ResourceGroupId")]
            [Validation(Required=true)]
            public string ResourceGroupId { get; set; }
            [NameInMap("EipInstanceId")]
            [Validation(Required=true)]
            public string EipInstanceId { get; set; }
            [NameInMap("ContainerGroupName")]
            [Validation(Required=true)]
            public string ContainerGroupName { get; set; }
            [NameInMap("InstanceType")]
            [Validation(Required=true)]
            public string InstanceType { get; set; }
            [NameInMap("Tags")]
            [Validation(Required=true)]
            public List<ExportContainerGroupTemplateResponseTemplateTags> Tags { get; set; }
            public class ExportContainerGroupTemplateResponseTemplateTags : TeaModel {
                    public string Key { get; set; }
                    public string Value { get; set; }
            }
            [NameInMap("Resources")]
            [Validation(Required=true)]
            public ExportContainerGroupTemplateResponseTemplateResources Resources { get; set; }
            public class ExportContainerGroupTemplateResponseTemplateResources : TeaModel {
                [NameInMap("Cpu")]
                [Validation(Required=true)]
                public float? Cpu { get; set; }

                [NameInMap("Memory")]
                [Validation(Required=true)]
                public float? Memory { get; set; }

            }
            [NameInMap("Spec")]
            [Validation(Required=true)]
            public ExportContainerGroupTemplateResponseTemplateSpec Spec { get; set; }
            public class ExportContainerGroupTemplateResponseTemplateSpec : TeaModel {
                [NameInMap("RestartPolicy")]
                [Validation(Required=true)]
                public string RestartPolicy { get; set; }

                [NameInMap("DnsPolicy")]
                [Validation(Required=true)]
                public string DnsPolicy { get; set; }

                [NameInMap("Volumes")]
                [Validation(Required=true)]
                public List<ExportContainerGroupTemplateResponseTemplateSpecVolumes> Volumes { get; set; }
                public class ExportContainerGroupTemplateResponseTemplateSpecVolumes : TeaModel {
                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("ConfigFile")]
                    [Validation(Required=true)]
                    public ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile ConfigFile { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFile : TeaModel {
                        [NameInMap("DefaultMode")]
                        [Validation(Required=true)]
                        public int? DefaultMode { get; set; }
                        [NameInMap("Items")]
                        [Validation(Required=true)]
                        public List<ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems> Items { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecVolumesConfigFileItems : TeaModel {
                                public int? Mode { get; set; }
                                public string Path { get; set; }
                                public string Content { get; set; }
                        }
                    };

                    [NameInMap("EmptyDir")]
                    [Validation(Required=true)]
                    public ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir EmptyDir { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecVolumesEmptyDir : TeaModel {
                        [NameInMap("SizeLimit")]
                        [Validation(Required=true)]
                        public string SizeLimit { get; set; }
                    };

                    [NameInMap("Nfs")]
                    [Validation(Required=true)]
                    public ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs Nfs { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecVolumesNfs : TeaModel {
                        [NameInMap("Server")]
                        [Validation(Required=true)]
                        public string Server { get; set; }
                        [NameInMap("Path")]
                        [Validation(Required=true)]
                        public string Path { get; set; }
                        [NameInMap("ReadOnly")]
                        [Validation(Required=true)]
                        public bool? ReadOnly { get; set; }
                    };

                }

                [NameInMap("InitContainers")]
                [Validation(Required=true)]
                public List<ExportContainerGroupTemplateResponseTemplateSpecInitContainers> InitContainers { get; set; }
                public class ExportContainerGroupTemplateResponseTemplateSpecInitContainers : TeaModel {
                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("Image")]
                    [Validation(Required=true)]
                    public string Image { get; set; }

                    [NameInMap("ImagePullPolicy")]
                    [Validation(Required=true)]
                    public string ImagePullPolicy { get; set; }

                    [NameInMap("Stdin")]
                    [Validation(Required=true)]
                    public bool? Stdin { get; set; }

                    [NameInMap("StdinOnce")]
                    [Validation(Required=true)]
                    public bool? StdinOnce { get; set; }

                    [NameInMap("Tty")]
                    [Validation(Required=true)]
                    public bool? Tty { get; set; }

                    [NameInMap("WorkingDir")]
                    [Validation(Required=true)]
                    public string WorkingDir { get; set; }

                    [NameInMap("Env")]
                    [Validation(Required=true)]
                    public List<ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv> Env { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnv : TeaModel {
                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                        [NameInMap("Value")]
                        [Validation(Required=true)]
                        public string Value { get; set; }

                        [NameInMap("ValueFrom")]
                        [Validation(Required=true)]
                        public ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom ValueFrom { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFrom : TeaModel {
                            [NameInMap("FieldRef")]
                            [Validation(Required=true)]
                            public ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef FieldRef { get; set; }
                            public class ExportContainerGroupTemplateResponseTemplateSpecInitContainersEnvValueFromFieldRef : TeaModel {
                                [NameInMap("FieldPath")]
                                [Validation(Required=true)]
                                public string FieldPath { get; set; }

                            }
                        };

                    }

                    [NameInMap("Ports")]
                    [Validation(Required=true)]
                    public List<ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts> Ports { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecInitContainersPorts : TeaModel {
                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                        [NameInMap("Protocol")]
                        [Validation(Required=true)]
                        public string Protocol { get; set; }

                        [NameInMap("ContainerPort")]
                        [Validation(Required=true)]
                        public int? ContainerPort { get; set; }

                    }

                    [NameInMap("VolumeMounts")]
                    [Validation(Required=true)]
                    public List<ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts> VolumeMounts { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecInitContainersVolumeMounts : TeaModel {
                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                        [NameInMap("SubPath")]
                        [Validation(Required=true)]
                        public string SubPath { get; set; }

                        [NameInMap("MountPath")]
                        [Validation(Required=true)]
                        public string MountPath { get; set; }

                        [NameInMap("ReadOnly")]
                        [Validation(Required=true)]
                        public bool? ReadOnly { get; set; }

                    }

                    [NameInMap("SecurityContext")]
                    [Validation(Required=true)]
                    public ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext SecurityContext { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContext : TeaModel {
                        [NameInMap("Sysctls")]
                        [Validation(Required=true)]
                        public List<ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls> Sysctls { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecInitContainersSecurityContextSysctls : TeaModel {
                                public string Name { get; set; }
                                public string Value { get; set; }
                        }
                    };

                    [NameInMap("Resources")]
                    [Validation(Required=true)]
                    public ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources Resources { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecInitContainersResources : TeaModel {
                        [NameInMap("Cpu")]
                        [Validation(Required=true)]
                        public float? Cpu { get; set; }
                        [NameInMap("Memory")]
                        [Validation(Required=true)]
                        public float? Memory { get; set; }
                    };

                    [NameInMap("Command")]
                    [Validation(Required=true)]
                    public List<string> Command { get; set; }

                    [NameInMap("Args")]
                    [Validation(Required=true)]
                    public List<string> Args { get; set; }

                }

                [NameInMap("Containers")]
                [Validation(Required=true)]
                public List<ExportContainerGroupTemplateResponseTemplateSpecContainers> Containers { get; set; }
                public class ExportContainerGroupTemplateResponseTemplateSpecContainers : TeaModel {
                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("Image")]
                    [Validation(Required=true)]
                    public string Image { get; set; }

                    [NameInMap("ImagePullPolicy")]
                    [Validation(Required=true)]
                    public string ImagePullPolicy { get; set; }

                    [NameInMap("Stdin")]
                    [Validation(Required=true)]
                    public bool? Stdin { get; set; }

                    [NameInMap("StdinOnce")]
                    [Validation(Required=true)]
                    public bool? StdinOnce { get; set; }

                    [NameInMap("Tty")]
                    [Validation(Required=true)]
                    public bool? Tty { get; set; }

                    [NameInMap("WorkingDir")]
                    [Validation(Required=true)]
                    public string WorkingDir { get; set; }

                    [NameInMap("Env")]
                    [Validation(Required=true)]
                    public List<ExportContainerGroupTemplateResponseTemplateSpecContainersEnv> Env { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecContainersEnv : TeaModel {
                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                        [NameInMap("Value")]
                        [Validation(Required=true)]
                        public string Value { get; set; }

                        [NameInMap("ValueFrom")]
                        [Validation(Required=true)]
                        public ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom ValueFrom { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFrom : TeaModel {
                            [NameInMap("FieldRef")]
                            [Validation(Required=true)]
                            public ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef FieldRef { get; set; }
                            public class ExportContainerGroupTemplateResponseTemplateSpecContainersEnvValueFromFieldRef : TeaModel {
                                [NameInMap("FieldPath")]
                                [Validation(Required=true)]
                                public string FieldPath { get; set; }

                            }
                        };

                    }

                    [NameInMap("Ports")]
                    [Validation(Required=true)]
                    public List<ExportContainerGroupTemplateResponseTemplateSpecContainersPorts> Ports { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecContainersPorts : TeaModel {
                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                        [NameInMap("Protocol")]
                        [Validation(Required=true)]
                        public string Protocol { get; set; }

                        [NameInMap("ContainerPort")]
                        [Validation(Required=true)]
                        public int? ContainerPort { get; set; }

                    }

                    [NameInMap("VolumeMounts")]
                    [Validation(Required=true)]
                    public List<ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts> VolumeMounts { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecContainersVolumeMounts : TeaModel {
                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }

                        [NameInMap("SubPath")]
                        [Validation(Required=true)]
                        public string SubPath { get; set; }

                        [NameInMap("MountPath")]
                        [Validation(Required=true)]
                        public string MountPath { get; set; }

                        [NameInMap("ReadOnly")]
                        [Validation(Required=true)]
                        public bool? ReadOnly { get; set; }

                    }

                    [NameInMap("SecurityContext")]
                    [Validation(Required=true)]
                    public ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext SecurityContext { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContext : TeaModel {
                        [NameInMap("Sysctls")]
                        [Validation(Required=true)]
                        public List<ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls> Sysctls { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecContainersSecurityContextSysctls : TeaModel {
                                public string Name { get; set; }
                                public string Value { get; set; }
                        }
                    };

                    [NameInMap("Resources")]
                    [Validation(Required=true)]
                    public ExportContainerGroupTemplateResponseTemplateSpecContainersResources Resources { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecContainersResources : TeaModel {
                        [NameInMap("Cpu")]
                        [Validation(Required=true)]
                        public float? Cpu { get; set; }
                        [NameInMap("Memory")]
                        [Validation(Required=true)]
                        public float? Memory { get; set; }
                    };

                    [NameInMap("ReadinessProbe")]
                    [Validation(Required=true)]
                    public ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe ReadinessProbe { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbe : TeaModel {
                        [NameInMap("InitialDelaySeconds")]
                        [Validation(Required=true)]
                        public int? InitialDelaySeconds { get; set; }
                        [NameInMap("PeriodSeconds")]
                        [Validation(Required=true)]
                        public int? PeriodSeconds { get; set; }
                        [NameInMap("SuccessThreshold")]
                        [Validation(Required=true)]
                        public int? SuccessThreshold { get; set; }
                        [NameInMap("FailureThreshold")]
                        [Validation(Required=true)]
                        public int? FailureThreshold { get; set; }
                        [NameInMap("TimeoutSeconds")]
                        [Validation(Required=true)]
                        public int? TimeoutSeconds { get; set; }
                        [NameInMap("Exec")]
                        [Validation(Required=true)]
                        public ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec Exec { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeExec : TeaModel {
                            [NameInMap("Command")]
                            [Validation(Required=true)]
                            public List<string> Command { get; set; }

                        }
                        [NameInMap("TcpSocket")]
                        [Validation(Required=true)]
                        public ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket TcpSocket { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeTcpSocket : TeaModel {
                            [NameInMap("Port")]
                            [Validation(Required=true)]
                            public int? Port { get; set; }

                        }
                        [NameInMap("HttpGet")]
                        [Validation(Required=true)]
                        public ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet HttpGet { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecContainersReadinessProbeHttpGet : TeaModel {
                            [NameInMap("Scheme")]
                            [Validation(Required=true)]
                            public string Scheme { get; set; }

                            [NameInMap("Path")]
                            [Validation(Required=true)]
                            public string Path { get; set; }

                            [NameInMap("Port")]
                            [Validation(Required=true)]
                            public int? Port { get; set; }

                        }
                    };

                    [NameInMap("LivenessProbe")]
                    [Validation(Required=true)]
                    public ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe LivenessProbe { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbe : TeaModel {
                        [NameInMap("InitialDelaySeconds")]
                        [Validation(Required=true)]
                        public int? InitialDelaySeconds { get; set; }
                        [NameInMap("PeriodSeconds")]
                        [Validation(Required=true)]
                        public int? PeriodSeconds { get; set; }
                        [NameInMap("SuccessThreshold")]
                        [Validation(Required=true)]
                        public int? SuccessThreshold { get; set; }
                        [NameInMap("FailureThreshold")]
                        [Validation(Required=true)]
                        public int? FailureThreshold { get; set; }
                        [NameInMap("TimeoutSeconds")]
                        [Validation(Required=true)]
                        public int? TimeoutSeconds { get; set; }
                        [NameInMap("Exec")]
                        [Validation(Required=true)]
                        public ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec Exec { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeExec : TeaModel {
                            [NameInMap("Command")]
                            [Validation(Required=true)]
                            public List<string> Command { get; set; }

                        }
                        [NameInMap("TcpSocket")]
                        [Validation(Required=true)]
                        public ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket TcpSocket { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeTcpSocket : TeaModel {
                            [NameInMap("Port")]
                            [Validation(Required=true)]
                            public int? Port { get; set; }

                        }
                        [NameInMap("HttpGet")]
                        [Validation(Required=true)]
                        public ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet HttpGet { get; set; }
                        public class ExportContainerGroupTemplateResponseTemplateSpecContainersLivenessProbeHttpGet : TeaModel {
                            [NameInMap("Scheme")]
                            [Validation(Required=true)]
                            public string Scheme { get; set; }

                            [NameInMap("Path")]
                            [Validation(Required=true)]
                            public string Path { get; set; }

                            [NameInMap("Port")]
                            [Validation(Required=true)]
                            public int? Port { get; set; }

                        }
                    };

                    [NameInMap("Command")]
                    [Validation(Required=true)]
                    public List<string> Command { get; set; }

                    [NameInMap("Args")]
                    [Validation(Required=true)]
                    public List<string> Args { get; set; }

                }

                [NameInMap("DnsConfig")]
                [Validation(Required=true)]
                public ExportContainerGroupTemplateResponseTemplateSpecDnsConfig DnsConfig { get; set; }
                public class ExportContainerGroupTemplateResponseTemplateSpecDnsConfig : TeaModel {
                    [NameInMap("Options")]
                    [Validation(Required=true)]
                    public List<ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions> Options { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecDnsConfigOptions : TeaModel {
                            public string Name { get; set; }
                            public string Value { get; set; }
                    }
                    [NameInMap("NameServers")]
                    [Validation(Required=true)]
                    public List<string> NameServers { get; set; }
                    [NameInMap("Searches")]
                    [Validation(Required=true)]
                    public List<string> Searches { get; set; }
                };

                [NameInMap("SecurityContext")]
                [Validation(Required=true)]
                public ExportContainerGroupTemplateResponseTemplateSpecSecurityContext SecurityContext { get; set; }
                public class ExportContainerGroupTemplateResponseTemplateSpecSecurityContext : TeaModel {
                    [NameInMap("Sysctls")]
                    [Validation(Required=true)]
                    public List<ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls> Sysctls { get; set; }
                    public class ExportContainerGroupTemplateResponseTemplateSpecSecurityContextSysctls : TeaModel {
                            public string Name { get; set; }
                            public string Value { get; set; }
                    }
                };

            }
        };

    }

}
