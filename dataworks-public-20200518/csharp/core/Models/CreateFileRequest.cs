// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class CreateFileRequest : TeaModel {
        [NameInMap("FileFolderPath")]
        [Validation(Required=false)]
        public string FileFolderPath { get; set; }

        [NameInMap("ProjectId")]
        [Validation(Required=false)]
        public long ProjectId { get; set; }

        [NameInMap("FileName")]
        [Validation(Required=true)]
        public string FileName { get; set; }

        [NameInMap("FileDescription")]
        [Validation(Required=false)]
        public string FileDescription { get; set; }

        [NameInMap("FileType")]
        [Validation(Required=true)]
        public int? FileType { get; set; }

        [NameInMap("Owner")]
        [Validation(Required=false)]
        public string Owner { get; set; }

        [NameInMap("Content")]
        [Validation(Required=false)]
        public string Content { get; set; }

        [NameInMap("AutoRerunTimes")]
        [Validation(Required=false)]
        public int? AutoRerunTimes { get; set; }

        [NameInMap("AutoRerunIntervalMillis")]
        [Validation(Required=false)]
        public int? AutoRerunIntervalMillis { get; set; }

        [NameInMap("RerunMode")]
        [Validation(Required=false)]
        public string RerunMode { get; set; }

        [NameInMap("Stop")]
        [Validation(Required=false)]
        public bool? Stop { get; set; }

        [NameInMap("ParaValue")]
        [Validation(Required=false)]
        public string ParaValue { get; set; }

        [NameInMap("StartEffectDate")]
        [Validation(Required=false)]
        public long StartEffectDate { get; set; }

        [NameInMap("EndEffectDate")]
        [Validation(Required=false)]
        public long EndEffectDate { get; set; }

        [NameInMap("CronExpress")]
        [Validation(Required=false)]
        public string CronExpress { get; set; }

        [NameInMap("CycleType")]
        [Validation(Required=false)]
        public string CycleType { get; set; }

        [NameInMap("DependentType")]
        [Validation(Required=false)]
        public string DependentType { get; set; }

        [NameInMap("DependentCloudUuidList")]
        [Validation(Required=false)]
        public string DependentCloudUuidList { get; set; }

        [NameInMap("InputList")]
        [Validation(Required=true)]
        public string InputList { get; set; }

        [NameInMap("ProjectIdentifier")]
        [Validation(Required=false)]
        public string ProjectIdentifier { get; set; }

    }

}
