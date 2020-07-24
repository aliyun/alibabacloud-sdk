// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class DescribeClustersResponseBody : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("name")]
        [Validation(Required=true)]
        public string Name { get; set; }

        [NameInMap("cluster_id")]
        [Validation(Required=true)]
        public string ClusterId { get; set; }

        [NameInMap("region_id")]
        [Validation(Required=true)]
        public string RegionId { get; set; }

        [NameInMap("state")]
        [Validation(Required=true)]
        public string State { get; set; }

        [NameInMap("cluster_type")]
        [Validation(Required=true)]
        public string ClusterType { get; set; }

        [NameInMap("current_version")]
        [Validation(Required=true)]
        public string CurrentVersion { get; set; }

        [NameInMap("meta_data")]
        [Validation(Required=true)]
        public string MetaData { get; set; }

        [NameInMap("resource_group_id")]
        [Validation(Required=true)]
        public string ResourceGroupId { get; set; }

        [NameInMap("vpc_id")]
        [Validation(Required=true)]
        public string VpcId { get; set; }

        [NameInMap("vswitch_id")]
        [Validation(Required=true)]
        public string VswitchId { get; set; }

        [NameInMap("vswitch_cidr")]
        [Validation(Required=true)]
        public string VswitchCidr { get; set; }

        [NameInMap("data_disk_size")]
        [Validation(Required=true)]
        public int? DataDiskSize { get; set; }

        [NameInMap("data_disk_category")]
        [Validation(Required=true)]
        public string DataDiskCategory { get; set; }

        [NameInMap("security_group_id")]
        [Validation(Required=true)]
        public string SecurityGroupId { get; set; }

        [NameInMap("zone_id")]
        [Validation(Required=true)]
        public string ZoneId { get; set; }

        [NameInMap("network_mode")]
        [Validation(Required=true)]
        public string NetworkMode { get; set; }

        [NameInMap("master_url")]
        [Validation(Required=true)]
        public string MasterUrl { get; set; }

        [NameInMap("docker_version")]
        [Validation(Required=true)]
        public string DockerVersion { get; set; }

        [NameInMap("deletion_protection")]
        [Validation(Required=true)]
        public bool? DeletionProtection { get; set; }

        [NameInMap("external_loadbalancer_id")]
        [Validation(Required=true)]
        public string ExternalLoadbalancerId { get; set; }

        [NameInMap("created")]
        [Validation(Required=true)]
        public string Created { get; set; }

        [NameInMap("updated")]
        [Validation(Required=true)]
        public string Updated { get; set; }

        [NameInMap("size")]
        [Validation(Required=true)]
        public int? Size { get; set; }

        [NameInMap("tags")]
        [Validation(Required=true)]
        public List<DescribeClustersResponseBodyTags> Tags { get; set; }
        public class DescribeClustersResponseBodyTags : TeaModel {
            [NameInMap("key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("value")]
            [Validation(Required=true)]
            public string Value { get; set; }

        }

    }

}
