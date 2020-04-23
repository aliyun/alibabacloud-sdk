// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ECI.Models
{
    public class DescribeContainerGroupsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("NextToken")]
        [Validation(Required=true)]
        public string NextToken { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public int? TotalCount { get; set; }

        [NameInMap("ContainerGroups")]
        [Validation(Required=true)]
        public List<DescribeContainerGroupsResponseContainerGroups> ContainerGroups { get; set; }
        public class DescribeContainerGroupsResponseContainerGroups : TeaModel {
            [NameInMap("ContainerGroupId")]
            [Validation(Required=true)]
            public string ContainerGroupId { get; set; }

            [NameInMap("ContainerGroupName")]
            [Validation(Required=true)]
            public string ContainerGroupName { get; set; }

            [NameInMap("RegionId")]
            [Validation(Required=true)]
            public string RegionId { get; set; }

            [NameInMap("ZoneId")]
            [Validation(Required=true)]
            public string ZoneId { get; set; }

            [NameInMap("Memory")]
            [Validation(Required=true)]
            public float? Memory { get; set; }

            [NameInMap("Cpu")]
            [Validation(Required=true)]
            public float? Cpu { get; set; }

            [NameInMap("VSwitchId")]
            [Validation(Required=true)]
            public string VSwitchId { get; set; }

            [NameInMap("SecurityGroupId")]
            [Validation(Required=true)]
            public string SecurityGroupId { get; set; }

            [NameInMap("RestartPolicy")]
            [Validation(Required=true)]
            public string RestartPolicy { get; set; }

            [NameInMap("IntranetIp")]
            [Validation(Required=true)]
            public string IntranetIp { get; set; }

            [NameInMap("Status")]
            [Validation(Required=true)]
            public string Status { get; set; }

            [NameInMap("InternetIp")]
            [Validation(Required=true)]
            public string InternetIp { get; set; }

            [NameInMap("CreationTime")]
            [Validation(Required=true)]
            public string CreationTime { get; set; }

            [NameInMap("SucceededTime")]
            [Validation(Required=true)]
            public string SucceededTime { get; set; }

            [NameInMap("EniInstanceId")]
            [Validation(Required=true)]
            public string EniInstanceId { get; set; }

            [NameInMap("InstanceType")]
            [Validation(Required=true)]
            public string InstanceType { get; set; }

            [NameInMap("ExpiredTime")]
            [Validation(Required=true)]
            public string ExpiredTime { get; set; }

            [NameInMap("FailedTime")]
            [Validation(Required=true)]
            public string FailedTime { get; set; }

            [NameInMap("RamRoleName")]
            [Validation(Required=true)]
            public string RamRoleName { get; set; }

            [NameInMap("Ipv6Address")]
            [Validation(Required=true)]
            public string Ipv6Address { get; set; }

            [NameInMap("VpcId")]
            [Validation(Required=true)]
            public string VpcId { get; set; }

            [NameInMap("Discount")]
            [Validation(Required=true)]
            public int? Discount { get; set; }

            [NameInMap("ResourceGroupId")]
            [Validation(Required=true)]
            public string ResourceGroupId { get; set; }

            [NameInMap("TenantEniInstanceId")]
            [Validation(Required=true)]
            public string TenantEniInstanceId { get; set; }

            [NameInMap("TenantVSwitchId")]
            [Validation(Required=true)]
            public string TenantVSwitchId { get; set; }

            [NameInMap("TenantSecurityGroupId")]
            [Validation(Required=true)]
            public string TenantSecurityGroupId { get; set; }

            [NameInMap("SpotStrategy")]
            [Validation(Required=true)]
            public string SpotStrategy { get; set; }

            [NameInMap("Tags")]
            [Validation(Required=true)]
            public List<DescribeContainerGroupsResponseContainerGroupsTags> Tags { get; set; }
            public class DescribeContainerGroupsResponseContainerGroupsTags : TeaModel {
                [NameInMap("Key")]
                [Validation(Required=true)]
                public string Key { get; set; }

                [NameInMap("Value")]
                [Validation(Required=true)]
                public string Value { get; set; }

            }

            [NameInMap("Events")]
            [Validation(Required=true)]
            public List<DescribeContainerGroupsResponseContainerGroupsEvents> Events { get; set; }
            public class DescribeContainerGroupsResponseContainerGroupsEvents : TeaModel {
                [NameInMap("Count")]
                [Validation(Required=true)]
                public int? Count { get; set; }

                [NameInMap("Type")]
                [Validation(Required=true)]
                public string Type { get; set; }

                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("Message")]
                [Validation(Required=true)]
                public string Message { get; set; }

                [NameInMap("FirstTimestamp")]
                [Validation(Required=true)]
                public string FirstTimestamp { get; set; }

                [NameInMap("LastTimestamp")]
                [Validation(Required=true)]
                public string LastTimestamp { get; set; }

                [NameInMap("Reason")]
                [Validation(Required=true)]
                public string Reason { get; set; }

            }

            [NameInMap("Containers")]
            [Validation(Required=true)]
            public List<DescribeContainerGroupsResponseContainerGroupsContainers> Containers { get; set; }
            public class DescribeContainerGroupsResponseContainerGroupsContainers : TeaModel {
                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("Image")]
                [Validation(Required=true)]
                public string Image { get; set; }

                [NameInMap("Memory")]
                [Validation(Required=true)]
                public float? Memory { get; set; }

                [NameInMap("Cpu")]
                [Validation(Required=true)]
                public float? Cpu { get; set; }

                [NameInMap("RestartCount")]
                [Validation(Required=true)]
                public int? RestartCount { get; set; }

                [NameInMap("WorkingDir")]
                [Validation(Required=true)]
                public string WorkingDir { get; set; }

                [NameInMap("ImagePullPolicy")]
                [Validation(Required=true)]
                public string ImagePullPolicy { get; set; }

                [NameInMap("Ready")]
                [Validation(Required=true)]
                public bool? Ready { get; set; }

                [NameInMap("Gpu")]
                [Validation(Required=true)]
                public int? Gpu { get; set; }

                [NameInMap("Stdin")]
                [Validation(Required=true)]
                public bool? Stdin { get; set; }

                [NameInMap("StdinOnce")]
                [Validation(Required=true)]
                public bool? StdinOnce { get; set; }

                [NameInMap("Tty")]
                [Validation(Required=true)]
                public bool? Tty { get; set; }

                [NameInMap("VolumeMounts")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts> VolumeMounts { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsContainersVolumeMounts : TeaModel {
                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("MountPath")]
                    [Validation(Required=true)]
                    public string MountPath { get; set; }

                    [NameInMap("ReadOnly")]
                    [Validation(Required=true)]
                    public bool? ReadOnly { get; set; }

                }

                [NameInMap("Ports")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupsResponseContainerGroupsContainersPorts> Ports { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsContainersPorts : TeaModel {
                    [NameInMap("Port")]
                    [Validation(Required=true)]
                    public int? Port { get; set; }

                    [NameInMap("Protocol")]
                    [Validation(Required=true)]
                    public string Protocol { get; set; }

                }

                [NameInMap("EnvironmentVars")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars> EnvironmentVars { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVars : TeaModel {
                    [NameInMap("Key")]
                    [Validation(Required=true)]
                    public string Key { get; set; }

                    [NameInMap("Value")]
                    [Validation(Required=true)]
                    public string Value { get; set; }

                    [NameInMap("ValueFrom")]
                    [Validation(Required=true)]
                    public DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom ValueFrom { get; set; }
                    public class DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFrom : TeaModel {
                        [NameInMap("FieldRef")]
                        [Validation(Required=true)]
                        public DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef FieldRef { get; set; }
                        public class DescribeContainerGroupsResponseContainerGroupsContainersEnvironmentVarsValueFromFieldRef : TeaModel {
                            [NameInMap("FieldPath")]
                            [Validation(Required=true)]
                            public string FieldPath { get; set; }

                        }
                    };

                }

                [NameInMap("PreviousState")]
                [Validation(Required=true)]
                public DescribeContainerGroupsResponseContainerGroupsContainersPreviousState PreviousState { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsContainersPreviousState : TeaModel {
                    [NameInMap("State")]
                    [Validation(Required=true)]
                    public string State { get; set; }
                    [NameInMap("DetailStatus")]
                    [Validation(Required=true)]
                    public string DetailStatus { get; set; }
                    [NameInMap("ExitCode")]
                    [Validation(Required=true)]
                    public int? ExitCode { get; set; }
                    [NameInMap("StartTime")]
                    [Validation(Required=true)]
                    public string StartTime { get; set; }
                    [NameInMap("FinishTime")]
                    [Validation(Required=true)]
                    public string FinishTime { get; set; }
                    [NameInMap("Reason")]
                    [Validation(Required=true)]
                    public string Reason { get; set; }
                    [NameInMap("Message")]
                    [Validation(Required=true)]
                    public string Message { get; set; }
                    [NameInMap("Signal")]
                    [Validation(Required=true)]
                    public int? Signal { get; set; }
                };

                [NameInMap("CurrentState")]
                [Validation(Required=true)]
                public DescribeContainerGroupsResponseContainerGroupsContainersCurrentState CurrentState { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsContainersCurrentState : TeaModel {
                    [NameInMap("State")]
                    [Validation(Required=true)]
                    public string State { get; set; }
                    [NameInMap("DetailStatus")]
                    [Validation(Required=true)]
                    public string DetailStatus { get; set; }
                    [NameInMap("ExitCode")]
                    [Validation(Required=true)]
                    public int? ExitCode { get; set; }
                    [NameInMap("StartTime")]
                    [Validation(Required=true)]
                    public string StartTime { get; set; }
                    [NameInMap("FinishTime")]
                    [Validation(Required=true)]
                    public string FinishTime { get; set; }
                    [NameInMap("Reason")]
                    [Validation(Required=true)]
                    public string Reason { get; set; }
                    [NameInMap("Message")]
                    [Validation(Required=true)]
                    public string Message { get; set; }
                    [NameInMap("Signal")]
                    [Validation(Required=true)]
                    public int? Signal { get; set; }
                };

                [NameInMap("ReadinessProbe")]
                [Validation(Required=true)]
                public DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe ReadinessProbe { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbe : TeaModel {
                    [NameInMap("InitialDelaySeconds")]
                    [Validation(Required=true)]
                    public int? InitialDelaySeconds { get; set; }
                    [NameInMap("PeriodSeconds")]
                    [Validation(Required=true)]
                    public int? PeriodSeconds { get; set; }
                    [NameInMap("TimeoutSeconds")]
                    [Validation(Required=true)]
                    public int? TimeoutSeconds { get; set; }
                    [NameInMap("SuccessThreshold")]
                    [Validation(Required=true)]
                    public int? SuccessThreshold { get; set; }
                    [NameInMap("FailureThreshold")]
                    [Validation(Required=true)]
                    public int? FailureThreshold { get; set; }
                    [NameInMap("HttpGet")]
                    [Validation(Required=true)]
                    public DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet HttpGet { get; set; }
                    public class DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeHttpGet : TeaModel {
                        [NameInMap("Path")]
                        [Validation(Required=true)]
                        public string Path { get; set; }

                        [NameInMap("Port")]
                        [Validation(Required=true)]
                        public int? Port { get; set; }

                        [NameInMap("Scheme")]
                        [Validation(Required=true)]
                        public string Scheme { get; set; }

                    }
                    [NameInMap("TcpSocket")]
                    [Validation(Required=true)]
                    public DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket TcpSocket { get; set; }
                    public class DescribeContainerGroupsResponseContainerGroupsContainersReadinessProbeTcpSocket : TeaModel {
                        [NameInMap("Host")]
                        [Validation(Required=true)]
                        public string Host { get; set; }

                        [NameInMap("Port")]
                        [Validation(Required=true)]
                        public int? Port { get; set; }

                    }
                    [NameInMap("Execs")]
                    [Validation(Required=true)]
                    public List<string> Execs { get; set; }
                };

                [NameInMap("LivenessProbe")]
                [Validation(Required=true)]
                public DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe LivenessProbe { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbe : TeaModel {
                    [NameInMap("InitialDelaySeconds")]
                    [Validation(Required=true)]
                    public int? InitialDelaySeconds { get; set; }
                    [NameInMap("PeriodSeconds")]
                    [Validation(Required=true)]
                    public int? PeriodSeconds { get; set; }
                    [NameInMap("TimeoutSeconds")]
                    [Validation(Required=true)]
                    public int? TimeoutSeconds { get; set; }
                    [NameInMap("SuccessThreshold")]
                    [Validation(Required=true)]
                    public int? SuccessThreshold { get; set; }
                    [NameInMap("FailureThreshold")]
                    [Validation(Required=true)]
                    public int? FailureThreshold { get; set; }
                    [NameInMap("HttpGet")]
                    [Validation(Required=true)]
                    public DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet HttpGet { get; set; }
                    public class DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeHttpGet : TeaModel {
                        [NameInMap("Path")]
                        [Validation(Required=true)]
                        public string Path { get; set; }

                        [NameInMap("Port")]
                        [Validation(Required=true)]
                        public int? Port { get; set; }

                        [NameInMap("Scheme")]
                        [Validation(Required=true)]
                        public string Scheme { get; set; }

                    }
                    [NameInMap("TcpSocket")]
                    [Validation(Required=true)]
                    public DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket TcpSocket { get; set; }
                    public class DescribeContainerGroupsResponseContainerGroupsContainersLivenessProbeTcpSocket : TeaModel {
                        [NameInMap("Host")]
                        [Validation(Required=true)]
                        public string Host { get; set; }

                        [NameInMap("Port")]
                        [Validation(Required=true)]
                        public int? Port { get; set; }

                    }
                    [NameInMap("Execs")]
                    [Validation(Required=true)]
                    public List<string> Execs { get; set; }
                };

                [NameInMap("SecurityContext")]
                [Validation(Required=true)]
                public DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext SecurityContext { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsContainersSecurityContext : TeaModel {
                    [NameInMap("ReadOnlyRootFilesystem")]
                    [Validation(Required=true)]
                    public bool? ReadOnlyRootFilesystem { get; set; }
                    [NameInMap("RunAsUser")]
                    [Validation(Required=true)]
                    public long RunAsUser { get; set; }
                    [NameInMap("Capability")]
                    [Validation(Required=true)]
                    public DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability Capability { get; set; }
                    public class DescribeContainerGroupsResponseContainerGroupsContainersSecurityContextCapability : TeaModel {
                        [NameInMap("Adds")]
                        [Validation(Required=true)]
                        public List<string> Adds { get; set; }

                    }
                };

                [NameInMap("Commands")]
                [Validation(Required=true)]
                public List<string> Commands { get; set; }

                [NameInMap("Args")]
                [Validation(Required=true)]
                public List<string> Args { get; set; }

            }

            [NameInMap("Volumes")]
            [Validation(Required=true)]
            public List<DescribeContainerGroupsResponseContainerGroupsVolumes> Volumes { get; set; }
            public class DescribeContainerGroupsResponseContainerGroupsVolumes : TeaModel {
                [NameInMap("Type")]
                [Validation(Required=true)]
                public string Type { get; set; }

                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("NFSVolumePath")]
                [Validation(Required=true)]
                public string NFSVolumePath { get; set; }

                [NameInMap("NFSVolumeServer")]
                [Validation(Required=true)]
                public string NFSVolumeServer { get; set; }

                [NameInMap("NFSVolumeReadOnly")]
                [Validation(Required=true)]
                public bool? NFSVolumeReadOnly { get; set; }

                [NameInMap("DiskVolumeDiskId")]
                [Validation(Required=true)]
                public string DiskVolumeDiskId { get; set; }

                [NameInMap("DiskVolumeFsType")]
                [Validation(Required=true)]
                public string DiskVolumeFsType { get; set; }

                [NameInMap("FlexVolumeDriver")]
                [Validation(Required=true)]
                public string FlexVolumeDriver { get; set; }

                [NameInMap("FlexVolumeFsType")]
                [Validation(Required=true)]
                public string FlexVolumeFsType { get; set; }

                [NameInMap("FlexVolumeOptions")]
                [Validation(Required=true)]
                public string FlexVolumeOptions { get; set; }

                [NameInMap("ConfigFileVolumeConfigFileToPaths")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths> ConfigFileVolumeConfigFileToPaths { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsVolumesConfigFileVolumeConfigFileToPaths : TeaModel {
                    [NameInMap("Content")]
                    [Validation(Required=true)]
                    public string Content { get; set; }

                    [NameInMap("Path")]
                    [Validation(Required=true)]
                    public string Path { get; set; }

                }

            }

            [NameInMap("InitContainers")]
            [Validation(Required=true)]
            public List<DescribeContainerGroupsResponseContainerGroupsInitContainers> InitContainers { get; set; }
            public class DescribeContainerGroupsResponseContainerGroupsInitContainers : TeaModel {
                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("Image")]
                [Validation(Required=true)]
                public string Image { get; set; }

                [NameInMap("Cpu")]
                [Validation(Required=true)]
                public float? Cpu { get; set; }

                [NameInMap("Memory")]
                [Validation(Required=true)]
                public float? Memory { get; set; }

                [NameInMap("RestartCount")]
                [Validation(Required=true)]
                public int? RestartCount { get; set; }

                [NameInMap("WorkingDir")]
                [Validation(Required=true)]
                public string WorkingDir { get; set; }

                [NameInMap("ImagePullPolicy")]
                [Validation(Required=true)]
                public string ImagePullPolicy { get; set; }

                [NameInMap("Ready")]
                [Validation(Required=true)]
                public bool? Ready { get; set; }

                [NameInMap("Gpu")]
                [Validation(Required=true)]
                public int? Gpu { get; set; }

                [NameInMap("VolumeMounts")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts> VolumeMounts { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsInitContainersVolumeMounts : TeaModel {
                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("MountPath")]
                    [Validation(Required=true)]
                    public string MountPath { get; set; }

                    [NameInMap("ReadOnly")]
                    [Validation(Required=true)]
                    public bool? ReadOnly { get; set; }

                }

                [NameInMap("Ports")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupsResponseContainerGroupsInitContainersPorts> Ports { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsInitContainersPorts : TeaModel {
                    [NameInMap("Port")]
                    [Validation(Required=true)]
                    public int? Port { get; set; }

                    [NameInMap("Protocol")]
                    [Validation(Required=true)]
                    public string Protocol { get; set; }

                }

                [NameInMap("EnvironmentVars")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars> EnvironmentVars { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVars : TeaModel {
                    [NameInMap("Key")]
                    [Validation(Required=true)]
                    public string Key { get; set; }

                    [NameInMap("Value")]
                    [Validation(Required=true)]
                    public string Value { get; set; }

                    [NameInMap("ValueFrom")]
                    [Validation(Required=true)]
                    public DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom ValueFrom { get; set; }
                    public class DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFrom : TeaModel {
                        [NameInMap("FieldRef")]
                        [Validation(Required=true)]
                        public DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef FieldRef { get; set; }
                        public class DescribeContainerGroupsResponseContainerGroupsInitContainersEnvironmentVarsValueFromFieldRef : TeaModel {
                            [NameInMap("FieldPath")]
                            [Validation(Required=true)]
                            public string FieldPath { get; set; }

                        }
                    };

                }

                [NameInMap("PreviousState")]
                [Validation(Required=true)]
                public DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState PreviousState { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsInitContainersPreviousState : TeaModel {
                    [NameInMap("State")]
                    [Validation(Required=true)]
                    public string State { get; set; }
                    [NameInMap("DetailStatus")]
                    [Validation(Required=true)]
                    public string DetailStatus { get; set; }
                    [NameInMap("ExitCode")]
                    [Validation(Required=true)]
                    public int? ExitCode { get; set; }
                    [NameInMap("StartTime")]
                    [Validation(Required=true)]
                    public string StartTime { get; set; }
                    [NameInMap("FinishTime")]
                    [Validation(Required=true)]
                    public string FinishTime { get; set; }
                    [NameInMap("Reason")]
                    [Validation(Required=true)]
                    public string Reason { get; set; }
                    [NameInMap("Message")]
                    [Validation(Required=true)]
                    public string Message { get; set; }
                    [NameInMap("Signal")]
                    [Validation(Required=true)]
                    public int? Signal { get; set; }
                };

                [NameInMap("CurrentState")]
                [Validation(Required=true)]
                public DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState CurrentState { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsInitContainersCurrentState : TeaModel {
                    [NameInMap("State")]
                    [Validation(Required=true)]
                    public string State { get; set; }
                    [NameInMap("DetailStatus")]
                    [Validation(Required=true)]
                    public string DetailStatus { get; set; }
                    [NameInMap("ExitCode")]
                    [Validation(Required=true)]
                    public int? ExitCode { get; set; }
                    [NameInMap("StartTime")]
                    [Validation(Required=true)]
                    public string StartTime { get; set; }
                    [NameInMap("FinishTime")]
                    [Validation(Required=true)]
                    public string FinishTime { get; set; }
                    [NameInMap("Reason")]
                    [Validation(Required=true)]
                    public string Reason { get; set; }
                    [NameInMap("Message")]
                    [Validation(Required=true)]
                    public string Message { get; set; }
                    [NameInMap("Signal")]
                    [Validation(Required=true)]
                    public int? Signal { get; set; }
                };

                [NameInMap("SecurityContext")]
                [Validation(Required=true)]
                public DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext SecurityContext { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContext : TeaModel {
                    [NameInMap("ReadOnlyRootFilesystem")]
                    [Validation(Required=true)]
                    public bool? ReadOnlyRootFilesystem { get; set; }
                    [NameInMap("RunAsUser")]
                    [Validation(Required=true)]
                    public long RunAsUser { get; set; }
                    [NameInMap("Capability")]
                    [Validation(Required=true)]
                    public DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability Capability { get; set; }
                    public class DescribeContainerGroupsResponseContainerGroupsInitContainersSecurityContextCapability : TeaModel {
                        [NameInMap("Adds")]
                        [Validation(Required=true)]
                        public List<string> Adds { get; set; }

                    }
                };

                [NameInMap("Command")]
                [Validation(Required=true)]
                public List<string> Command { get; set; }

                [NameInMap("Args")]
                [Validation(Required=true)]
                public List<string> Args { get; set; }

            }

            [NameInMap("HostAliases")]
            [Validation(Required=true)]
            public List<DescribeContainerGroupsResponseContainerGroupsHostAliases> HostAliases { get; set; }
            public class DescribeContainerGroupsResponseContainerGroupsHostAliases : TeaModel {
                [NameInMap("Ip")]
                [Validation(Required=true)]
                public string Ip { get; set; }

                [NameInMap("Hostnames")]
                [Validation(Required=true)]
                public List<string> Hostnames { get; set; }

            }

            [NameInMap("DnsConfig")]
            [Validation(Required=true)]
            public DescribeContainerGroupsResponseContainerGroupsDnsConfig DnsConfig { get; set; }
            public class DescribeContainerGroupsResponseContainerGroupsDnsConfig : TeaModel {
                [NameInMap("Options")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions> Options { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsDnsConfigOptions : TeaModel {
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

            [NameInMap("EciSecurityContext")]
            [Validation(Required=true)]
            public DescribeContainerGroupsResponseContainerGroupsEciSecurityContext EciSecurityContext { get; set; }
            public class DescribeContainerGroupsResponseContainerGroupsEciSecurityContext : TeaModel {
                [NameInMap("Sysctls")]
                [Validation(Required=true)]
                public List<DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls> Sysctls { get; set; }
                public class DescribeContainerGroupsResponseContainerGroupsEciSecurityContextSysctls : TeaModel {
                        public string Name { get; set; }
                        public string Value { get; set; }
                }
            };

        }

    }

}
