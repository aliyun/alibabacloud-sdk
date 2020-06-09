// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.NAS20170626.Models
{
    public class CreateFileSystemRequest : TeaModel {
        [NameInMap("FileSystemType")]
        [Validation(Required=false)]
        public string FileSystemType { get; set; }

        [NameInMap("ChargeType")]
        [Validation(Required=false)]
        public string ChargeType { get; set; }

        [NameInMap("Duration")]
        [Validation(Required=false)]
        public int? Duration { get; set; }

        [NameInMap("Capacity")]
        [Validation(Required=false)]
        public long Capacity { get; set; }

        [NameInMap("Bandwidth")]
        [Validation(Required=false)]
        public long Bandwidth { get; set; }

        [NameInMap("StorageType")]
        [Validation(Required=true)]
        public string StorageType { get; set; }

        [NameInMap("ZoneId")]
        [Validation(Required=false)]
        public string ZoneId { get; set; }

        [NameInMap("ProtocolType")]
        [Validation(Required=true)]
        public string ProtocolType { get; set; }

        [NameInMap("EncryptType")]
        [Validation(Required=false)]
        public int? EncryptType { get; set; }

        [NameInMap("SnapshotId")]
        [Validation(Required=false)]
        public string SnapshotId { get; set; }

        [NameInMap("VpcId")]
        [Validation(Required=false)]
        public string VpcId { get; set; }

        [NameInMap("VSwitchId")]
        [Validation(Required=false)]
        public string VSwitchId { get; set; }

        [NameInMap("Description")]
        [Validation(Required=false)]
        public string Description { get; set; }

        [NameInMap("ClientToken")]
        [Validation(Required=false)]
        public string ClientToken { get; set; }

        [NameInMap("DryRun")]
        [Validation(Required=false)]
        public bool? DryRun { get; set; }

    }

}
