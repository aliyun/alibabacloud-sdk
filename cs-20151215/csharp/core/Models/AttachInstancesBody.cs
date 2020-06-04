// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.CS20151215.Models
{
    public class AttachInstancesBody : TeaModel {
        [NameInMap("format_disk")]
        [Validation(Required=false)]
        public bool? FormatDisk { get; set; }

        [NameInMap("keep_instance_name")]
        [Validation(Required=false)]
        public bool? KeepInstanceName { get; set; }

        [NameInMap("cpu_policy")]
        [Validation(Required=false)]
        public string CpuPolicy { get; set; }

        [NameInMap("key_pair")]
        [Validation(Required=true)]
        public string KeyPair { get; set; }

        [NameInMap("password")]
        [Validation(Required=true)]
        public string Password { get; set; }

        [NameInMap("tags")]
        [Validation(Required=false)]
        public List<AttachInstancesBodyTags> Tags { get; set; }
        public class AttachInstancesBodyTags : TeaModel {
            [NameInMap("key")]
            [Validation(Required=false)]
            public string Key { get; set; }

            [NameInMap("value")]
            [Validation(Required=false)]
            public string Value { get; set; }

        }

        [NameInMap("instances")]
        [Validation(Required=false)]
        public List<string> Instances { get; set; }

    }

}
