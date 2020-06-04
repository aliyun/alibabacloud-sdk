// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Eci20180808.Models
{
    public class DescribeMultiContainerGroupMetricResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("MonitorDatas")]
        [Validation(Required=true)]
        public List<DescribeMultiContainerGroupMetricResponseMonitorDatas> MonitorDatas { get; set; }
        public class DescribeMultiContainerGroupMetricResponseMonitorDatas : TeaModel {
            [NameInMap("ContainerGroupId")]
            [Validation(Required=true)]
            public string ContainerGroupId { get; set; }

            [NameInMap("Records")]
            [Validation(Required=true)]
            public List<DescribeMultiContainerGroupMetricResponseMonitorDatasRecords> Records { get; set; }
            public class DescribeMultiContainerGroupMetricResponseMonitorDatasRecords : TeaModel {
                [NameInMap("Timestamp")]
                [Validation(Required=true)]
                public string Timestamp { get; set; }

                [NameInMap("Containers")]
                [Validation(Required=true)]
                public List<DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers> Containers { get; set; }
                public class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainers : TeaModel {
                    [NameInMap("Name")]
                    [Validation(Required=true)]
                    public string Name { get; set; }

                    [NameInMap("CPU")]
                    [Validation(Required=true)]
                    public DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU CPU { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersCPU : TeaModel {
                        [NameInMap("Limit")]
                        [Validation(Required=true)]
                        public long Limit { get; set; }
                        [NameInMap("Load")]
                        [Validation(Required=true)]
                        public long Load { get; set; }
                        [NameInMap("UsageCoreNanoSeconds")]
                        [Validation(Required=true)]
                        public long UsageCoreNanoSeconds { get; set; }
                        [NameInMap("UsageNanoCores")]
                        [Validation(Required=true)]
                        public long UsageNanoCores { get; set; }
                    };

                    [NameInMap("Memory")]
                    [Validation(Required=true)]
                    public DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory Memory { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsContainersMemory : TeaModel {
                        [NameInMap("AvailableBytes")]
                        [Validation(Required=true)]
                        public long AvailableBytes { get; set; }
                        [NameInMap("UsageBytes")]
                        [Validation(Required=true)]
                        public long UsageBytes { get; set; }
                        [NameInMap("Cache")]
                        [Validation(Required=true)]
                        public long Cache { get; set; }
                        [NameInMap("WorkingSet")]
                        [Validation(Required=true)]
                        public long WorkingSet { get; set; }
                        [NameInMap("Rss")]
                        [Validation(Required=true)]
                        public long Rss { get; set; }
                    };

                }

                [NameInMap("CPU")]
                [Validation(Required=true)]
                public DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU CPU { get; set; }
                public class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsCPU : TeaModel {
                    [NameInMap("Limit")]
                    [Validation(Required=true)]
                    public long Limit { get; set; }
                    [NameInMap("Load")]
                    [Validation(Required=true)]
                    public long Load { get; set; }
                    [NameInMap("UsageCoreNanoSeconds")]
                    [Validation(Required=true)]
                    public long UsageCoreNanoSeconds { get; set; }
                    [NameInMap("UsageNanoCores")]
                    [Validation(Required=true)]
                    public long UsageNanoCores { get; set; }
                };

                [NameInMap("Memory")]
                [Validation(Required=true)]
                public DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory Memory { get; set; }
                public class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsMemory : TeaModel {
                    [NameInMap("AvailableBytes")]
                    [Validation(Required=true)]
                    public long AvailableBytes { get; set; }
                    [NameInMap("UsageBytes")]
                    [Validation(Required=true)]
                    public long UsageBytes { get; set; }
                    [NameInMap("Cache")]
                    [Validation(Required=true)]
                    public long Cache { get; set; }
                    [NameInMap("WorkingSet")]
                    [Validation(Required=true)]
                    public long WorkingSet { get; set; }
                    [NameInMap("Rss")]
                    [Validation(Required=true)]
                    public long Rss { get; set; }
                };

                [NameInMap("Network")]
                [Validation(Required=true)]
                public DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork Network { get; set; }
                public class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetwork : TeaModel {
                    [NameInMap("Interfaces")]
                    [Validation(Required=true)]
                    public List<DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces> Interfaces { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasRecordsNetworkInterfaces : TeaModel {
                            public long TxBytes { get; set; }
                            public long RxBytes { get; set; }
                            public long TxErrors { get; set; }
                            public long RxErrors { get; set; }
                            public string Name { get; set; }
                    }
                };

            }

            [NameInMap("ContainerInfos")]
            [Validation(Required=true)]
            public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos> ContainerInfos { get; set; }
            public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfos : TeaModel {
                [NameInMap("Id")]
                [Validation(Required=true)]
                public string Id { get; set; }

                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

                [NameInMap("Namespace")]
                [Validation(Required=true)]
                public string Namespace { get; set; }

                [NameInMap("Labels")]
                [Validation(Required=true)]
                public string Labels { get; set; }

                [NameInMap("ContainerStats")]
                [Validation(Required=true)]
                public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats> ContainerStats { get; set; }
                public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStats : TeaModel {
                    [NameInMap("Timestamp")]
                    [Validation(Required=true)]
                    public string Timestamp { get; set; }

                    [NameInMap("FsStats")]
                    [Validation(Required=true)]
                    public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats> FsStats { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsFsStats : TeaModel {
                        [NameInMap("Device")]
                        [Validation(Required=true)]
                        public string Device { get; set; }

                        [NameInMap("Type")]
                        [Validation(Required=true)]
                        public string Type { get; set; }

                        [NameInMap("Limit")]
                        [Validation(Required=true)]
                        public long Limit { get; set; }

                        [NameInMap("Usage")]
                        [Validation(Required=true)]
                        public long Usage { get; set; }

                        [NameInMap("BaseUsage")]
                        [Validation(Required=true)]
                        public long BaseUsage { get; set; }

                        [NameInMap("Available")]
                        [Validation(Required=true)]
                        public long Available { get; set; }

                        [NameInMap("HasInodes")]
                        [Validation(Required=true)]
                        public bool? HasInodes { get; set; }

                        [NameInMap("Inodes")]
                        [Validation(Required=true)]
                        public long Inodes { get; set; }

                        [NameInMap("InodesFree")]
                        [Validation(Required=true)]
                        public long InodesFree { get; set; }

                        [NameInMap("ReadsCompleted")]
                        [Validation(Required=true)]
                        public long ReadsCompleted { get; set; }

                        [NameInMap("ReadsMerged")]
                        [Validation(Required=true)]
                        public long ReadsMerged { get; set; }

                        [NameInMap("SectorsRead")]
                        [Validation(Required=true)]
                        public long SectorsRead { get; set; }

                        [NameInMap("ReadTime")]
                        [Validation(Required=true)]
                        public long ReadTime { get; set; }

                        [NameInMap("WritesCompleted")]
                        [Validation(Required=true)]
                        public long WritesCompleted { get; set; }

                        [NameInMap("WritesMerged")]
                        [Validation(Required=true)]
                        public long WritesMerged { get; set; }

                        [NameInMap("SectorsWritten")]
                        [Validation(Required=true)]
                        public long SectorsWritten { get; set; }

                        [NameInMap("WriteTime")]
                        [Validation(Required=true)]
                        public long WriteTime { get; set; }

                        [NameInMap("IoInProgress")]
                        [Validation(Required=true)]
                        public long IoInProgress { get; set; }

                        [NameInMap("IoTime")]
                        [Validation(Required=true)]
                        public long IoTime { get; set; }

                        [NameInMap("WeightedIoTime")]
                        [Validation(Required=true)]
                        public long WeightedIoTime { get; set; }

                    }

                    [NameInMap("AcceleratorStats")]
                    [Validation(Required=true)]
                    public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats> AcceleratorStats { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsAcceleratorStats : TeaModel {
                        [NameInMap("Id")]
                        [Validation(Required=true)]
                        public string Id { get; set; }

                        [NameInMap("Make")]
                        [Validation(Required=true)]
                        public string Make { get; set; }

                        [NameInMap("Model")]
                        [Validation(Required=true)]
                        public string Model { get; set; }

                        [NameInMap("MemoryTotal")]
                        [Validation(Required=true)]
                        public long MemoryTotal { get; set; }

                        [NameInMap("MemoryUsed")]
                        [Validation(Required=true)]
                        public long MemoryUsed { get; set; }

                        [NameInMap("DutyCycle")]
                        [Validation(Required=true)]
                        public long DutyCycle { get; set; }

                    }

                    [NameInMap("CpuStats")]
                    [Validation(Required=true)]
                    public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats CpuStats { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStats : TeaModel {
                        [NameInMap("LoadAverage")]
                        [Validation(Required=true)]
                        public long LoadAverage { get; set; }
                        [NameInMap("CpuUsage")]
                        [Validation(Required=true)]
                        public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage CpuUsage { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuUsage : TeaModel {
                            [NameInMap("Total")]
                            [Validation(Required=true)]
                            public long Total { get; set; }

                            [NameInMap("User")]
                            [Validation(Required=true)]
                            public long User { get; set; }

                            [NameInMap("System")]
                            [Validation(Required=true)]
                            public long System { get; set; }

                            [NameInMap("PerCpuUsages")]
                            [Validation(Required=true)]
                            public List<long> PerCpuUsages { get; set; }

                        }
                        [NameInMap("CpuCFS")]
                        [Validation(Required=true)]
                        public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS CpuCFS { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsCpuStatsCpuCFS : TeaModel {
                            [NameInMap("Periods")]
                            [Validation(Required=true)]
                            public long Periods { get; set; }

                            [NameInMap("ThrottledPeriods")]
                            [Validation(Required=true)]
                            public long ThrottledPeriods { get; set; }

                            [NameInMap("ThrottledTime")]
                            [Validation(Required=true)]
                            public long ThrottledTime { get; set; }

                        }
                    };

                    [NameInMap("DiskIoStats")]
                    [Validation(Required=true)]
                    public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats DiskIoStats { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStats : TeaModel {
                        [NameInMap("IoServiceBytes")]
                        [Validation(Required=true)]
                        public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes> IoServiceBytes { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceBytes : TeaModel {
                                public string Device { get; set; }
                                public long Major { get; set; }
                                public long Minor { get; set; }
                                public string Stats { get; set; }
                        }
                        [NameInMap("IoServiced")]
                        [Validation(Required=true)]
                        public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced> IoServiced { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiced : TeaModel {
                                public string Device { get; set; }
                                public long Major { get; set; }
                                public long Minor { get; set; }
                                public string Stats { get; set; }
                        }
                        [NameInMap("IoQueued")]
                        [Validation(Required=true)]
                        public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued> IoQueued { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoQueued : TeaModel {
                                public string Device { get; set; }
                                public long Major { get; set; }
                                public long Minor { get; set; }
                                public string Stats { get; set; }
                        }
                        [NameInMap("Sectors")]
                        [Validation(Required=true)]
                        public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors> Sectors { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsSectors : TeaModel {
                                public string Device { get; set; }
                                public long Major { get; set; }
                                public long Minor { get; set; }
                                public string Stats { get; set; }
                        }
                        [NameInMap("IoServiceTime")]
                        [Validation(Required=true)]
                        public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime> IoServiceTime { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoServiceTime : TeaModel {
                                public string Device { get; set; }
                                public long Major { get; set; }
                                public long Minor { get; set; }
                                public string Stats { get; set; }
                        }
                        [NameInMap("IoWaitTime")]
                        [Validation(Required=true)]
                        public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime> IoWaitTime { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoWaitTime : TeaModel {
                                public string Device { get; set; }
                                public long Major { get; set; }
                                public long Minor { get; set; }
                                public string Stats { get; set; }
                        }
                        [NameInMap("IoMerged")]
                        [Validation(Required=true)]
                        public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged> IoMerged { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoMerged : TeaModel {
                                public string Device { get; set; }
                                public long Major { get; set; }
                                public long Minor { get; set; }
                                public string Stats { get; set; }
                        }
                        [NameInMap("IoTime")]
                        [Validation(Required=true)]
                        public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime> IoTime { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsDiskIoStatsIoTime : TeaModel {
                                public string Device { get; set; }
                                public long Major { get; set; }
                                public long Minor { get; set; }
                                public string Stats { get; set; }
                        }
                    };

                    [NameInMap("MemoryStats")]
                    [Validation(Required=true)]
                    public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats MemoryStats { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStats : TeaModel {
                        [NameInMap("Usage")]
                        [Validation(Required=true)]
                        public long Usage { get; set; }
                        [NameInMap("MaxUsage")]
                        [Validation(Required=true)]
                        public long MaxUsage { get; set; }
                        [NameInMap("Cache")]
                        [Validation(Required=true)]
                        public long Cache { get; set; }
                        [NameInMap("Rss")]
                        [Validation(Required=true)]
                        public long Rss { get; set; }
                        [NameInMap("Swap")]
                        [Validation(Required=true)]
                        public long Swap { get; set; }
                        [NameInMap("WorkingSet")]
                        [Validation(Required=true)]
                        public long WorkingSet { get; set; }
                        [NameInMap("FailCnt")]
                        [Validation(Required=true)]
                        public long FailCnt { get; set; }
                        [NameInMap("ContainerData")]
                        [Validation(Required=true)]
                        public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData ContainerData { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsContainerData : TeaModel {
                            [NameInMap("PgFault")]
                            [Validation(Required=true)]
                            public long PgFault { get; set; }

                            [NameInMap("PgmajFault")]
                            [Validation(Required=true)]
                            public long PgmajFault { get; set; }

                        }
                        [NameInMap("HierarchicalData")]
                        [Validation(Required=true)]
                        public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData HierarchicalData { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsMemoryStatsHierarchicalData : TeaModel {
                            [NameInMap("PgFault")]
                            [Validation(Required=true)]
                            public long PgFault { get; set; }

                            [NameInMap("PgmajFault")]
                            [Validation(Required=true)]
                            public long PgmajFault { get; set; }

                        }
                    };

                    [NameInMap("NetworkStats")]
                    [Validation(Required=true)]
                    public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats NetworkStats { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStats : TeaModel {
                        [NameInMap("Name")]
                        [Validation(Required=true)]
                        public string Name { get; set; }
                        [NameInMap("RxBytes")]
                        [Validation(Required=true)]
                        public long RxBytes { get; set; }
                        [NameInMap("RxPackets")]
                        [Validation(Required=true)]
                        public long RxPackets { get; set; }
                        [NameInMap("RxErrors")]
                        [Validation(Required=true)]
                        public long RxErrors { get; set; }
                        [NameInMap("RxDropped")]
                        [Validation(Required=true)]
                        public long RxDropped { get; set; }
                        [NameInMap("TxBytes")]
                        [Validation(Required=true)]
                        public long TxBytes { get; set; }
                        [NameInMap("TxPackets")]
                        [Validation(Required=true)]
                        public long TxPackets { get; set; }
                        [NameInMap("TxDropped")]
                        [Validation(Required=true)]
                        public long TxDropped { get; set; }
                        [NameInMap("TxErrors")]
                        [Validation(Required=true)]
                        public long TxErrors { get; set; }
                        [NameInMap("InterfaceStats")]
                        [Validation(Required=true)]
                        public List<DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats> InterfaceStats { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsInterfaceStats : TeaModel {
                                public string Name { get; set; }
                                public long RxBytes { get; set; }
                                public long RxPackets { get; set; }
                                public long RxErrors { get; set; }
                                public long RxDropped { get; set; }
                                public long TxBytes { get; set; }
                                public long TxPackets { get; set; }
                                public long TxDropped { get; set; }
                                public long TxErrors { get; set; }
                        }
                        [NameInMap("Tcp")]
                        [Validation(Required=true)]
                        public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp Tcp { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp : TeaModel {
                            [NameInMap("Established")]
                            [Validation(Required=true)]
                            public long Established { get; set; }

                            [NameInMap("SynSent")]
                            [Validation(Required=true)]
                            public long SynSent { get; set; }

                            [NameInMap("SynRecv")]
                            [Validation(Required=true)]
                            public long SynRecv { get; set; }

                            [NameInMap("FinWait1")]
                            [Validation(Required=true)]
                            public long FinWait1 { get; set; }

                            [NameInMap("FinWait2")]
                            [Validation(Required=true)]
                            public long FinWait2 { get; set; }

                            [NameInMap("TimeWait")]
                            [Validation(Required=true)]
                            public long TimeWait { get; set; }

                            [NameInMap("Close")]
                            [Validation(Required=true)]
                            public long Close { get; set; }

                            [NameInMap("CloseWait")]
                            [Validation(Required=true)]
                            public long CloseWait { get; set; }

                            [NameInMap("LastAck")]
                            [Validation(Required=true)]
                            public long LastAck { get; set; }

                            [NameInMap("Listen")]
                            [Validation(Required=true)]
                            public long Listen { get; set; }

                            [NameInMap("Closing")]
                            [Validation(Required=true)]
                            public long Closing { get; set; }

                        }
                        [NameInMap("Tcp6")]
                        [Validation(Required=true)]
                        public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 Tcp6 { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsTcp6 : TeaModel {
                            [NameInMap("Established")]
                            [Validation(Required=true)]
                            public long Established { get; set; }

                            [NameInMap("SynSent")]
                            [Validation(Required=true)]
                            public long SynSent { get; set; }

                            [NameInMap("SynRecv")]
                            [Validation(Required=true)]
                            public long SynRecv { get; set; }

                            [NameInMap("FinWait1")]
                            [Validation(Required=true)]
                            public long FinWait1 { get; set; }

                            [NameInMap("FinWait2")]
                            [Validation(Required=true)]
                            public long FinWait2 { get; set; }

                            [NameInMap("TimeWait")]
                            [Validation(Required=true)]
                            public long TimeWait { get; set; }

                            [NameInMap("Close")]
                            [Validation(Required=true)]
                            public long Close { get; set; }

                            [NameInMap("CloseWait")]
                            [Validation(Required=true)]
                            public long CloseWait { get; set; }

                            [NameInMap("LastAck")]
                            [Validation(Required=true)]
                            public long LastAck { get; set; }

                            [NameInMap("Listen")]
                            [Validation(Required=true)]
                            public long Listen { get; set; }

                            [NameInMap("Closing")]
                            [Validation(Required=true)]
                            public long Closing { get; set; }

                        }
                        [NameInMap("Udp")]
                        [Validation(Required=true)]
                        public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp Udp { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp : TeaModel {
                            [NameInMap("Listen")]
                            [Validation(Required=true)]
                            public long Listen { get; set; }

                            [NameInMap("Dropped")]
                            [Validation(Required=true)]
                            public long Dropped { get; set; }

                            [NameInMap("RxQueued")]
                            [Validation(Required=true)]
                            public long RxQueued { get; set; }

                            [NameInMap("TxQueued")]
                            [Validation(Required=true)]
                            public long TxQueued { get; set; }

                        }
                        [NameInMap("Udp6")]
                        [Validation(Required=true)]
                        public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6 Udp6 { get; set; }
                        public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsNetworkStatsUdp6 : TeaModel {
                            [NameInMap("Listen")]
                            [Validation(Required=true)]
                            public long Listen { get; set; }

                            [NameInMap("Dropped")]
                            [Validation(Required=true)]
                            public long Dropped { get; set; }

                            [NameInMap("RxQueued")]
                            [Validation(Required=true)]
                            public long RxQueued { get; set; }

                            [NameInMap("TxQueued")]
                            [Validation(Required=true)]
                            public long TxQueued { get; set; }

                        }
                    };

                    [NameInMap("TaskStats")]
                    [Validation(Required=true)]
                    public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats TaskStats { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerStatsTaskStats : TeaModel {
                        [NameInMap("NrSleeping")]
                        [Validation(Required=true)]
                        public long NrSleeping { get; set; }
                        [NameInMap("NrRunning")]
                        [Validation(Required=true)]
                        public long NrRunning { get; set; }
                        [NameInMap("NrStopped")]
                        [Validation(Required=true)]
                        public long NrStopped { get; set; }
                        [NameInMap("NrUninterruptible")]
                        [Validation(Required=true)]
                        public long NrUninterruptible { get; set; }
                        [NameInMap("NrIoWait")]
                        [Validation(Required=true)]
                        public long NrIoWait { get; set; }
                    };

                }

                [NameInMap("ContainerSpec")]
                [Validation(Required=true)]
                public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec ContainerSpec { get; set; }
                public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpec : TeaModel {
                    [NameInMap("CreationTime")]
                    [Validation(Required=true)]
                    public string CreationTime { get; set; }
                    [NameInMap("HasCpu")]
                    [Validation(Required=true)]
                    public bool? HasCpu { get; set; }
                    [NameInMap("HasMemory")]
                    [Validation(Required=true)]
                    public bool? HasMemory { get; set; }
                    [NameInMap("HasNetwork")]
                    [Validation(Required=true)]
                    public bool? HasNetwork { get; set; }
                    [NameInMap("HasFilesystem")]
                    [Validation(Required=true)]
                    public bool? HasFilesystem { get; set; }
                    [NameInMap("HasDiskIo")]
                    [Validation(Required=true)]
                    public bool? HasDiskIo { get; set; }
                    [NameInMap("HasCustomMetrics")]
                    [Validation(Required=true)]
                    public bool? HasCustomMetrics { get; set; }
                    [NameInMap("Image")]
                    [Validation(Required=true)]
                    public string Image { get; set; }
                    [NameInMap("Labels")]
                    [Validation(Required=true)]
                    public string Labels { get; set; }
                    [NameInMap("Envs")]
                    [Validation(Required=true)]
                    public string Envs { get; set; }
                    [NameInMap("ContainerCpu")]
                    [Validation(Required=true)]
                    public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu ContainerCpu { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerCpu : TeaModel {
                        [NameInMap("Limit")]
                        [Validation(Required=true)]
                        public long Limit { get; set; }

                        [NameInMap("MaxLimit")]
                        [Validation(Required=true)]
                        public long MaxLimit { get; set; }

                        [NameInMap("Mask")]
                        [Validation(Required=true)]
                        public string Mask { get; set; }

                        [NameInMap("Quota")]
                        [Validation(Required=true)]
                        public long Quota { get; set; }

                        [NameInMap("Period")]
                        [Validation(Required=true)]
                        public long Period { get; set; }

                    }
                    [NameInMap("ContainerMemory")]
                    [Validation(Required=true)]
                    public DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory ContainerMemory { get; set; }
                    public class DescribeMultiContainerGroupMetricResponseMonitorDatasContainerInfosContainerSpecContainerMemory : TeaModel {
                        [NameInMap("Limit")]
                        [Validation(Required=true)]
                        public long Limit { get; set; }

                        [NameInMap("Reservation")]
                        [Validation(Required=true)]
                        public long Reservation { get; set; }

                        [NameInMap("SwapLimit")]
                        [Validation(Required=true)]
                        public long SwapLimit { get; set; }

                    }
                };

                [NameInMap("Aliases")]
                [Validation(Required=true)]
                public List<string> Aliases { get; set; }

            }

        }

    }

}
