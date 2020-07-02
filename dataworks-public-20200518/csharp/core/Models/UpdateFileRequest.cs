// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class UpdateFileRequest : TeaModel {
        [NameInMap("FileFolderPath")]
        [Validation(Required=false)]
        public string FileFolderPath { get; set; }

        [NameInMap("ProjectId")]
        [Validation(Required=false)]
        public long ProjectId { get; set; }

        [NameInMap("FileName")]
        [Validation(Required=false)]
        public string FileName { get; set; }

        [NameInMap("FileDescription")]
        [Validation(Required=false)]
        public string FileDescription { get; set; }

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

        [NameInMap("DependentNodeIdList")]
        [Validation(Required=false)]
        public string DependentNodeIdList { get; set; }

        [NameInMap("InputList")]
        [Validation(Required=false)]
        public string InputList { get; set; }

        [NameInMap("ProjectIdentifier")]
        [Validation(Required=false)]
        public string ProjectIdentifier { get; set; }

        [NameInMap("FileId")]
        [Validation(Required=true)]
        public long FileId { get; set; }

        [NameInMap("OutputList")]
        [Validation(Required=false)]
        public string OutputList { get; set; }

    }

}
