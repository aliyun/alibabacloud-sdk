// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class UpdateUdfFileRequest : TeaModel {
        [NameInMap("FileFolderPath")]
        [Validation(Required=false)]
        public string FileFolderPath { get; set; }

        [NameInMap("ProjectId")]
        [Validation(Required=false)]
        public long ProjectId { get; set; }

        [NameInMap("FunctionType")]
        [Validation(Required=true)]
        public string FunctionType { get; set; }

        [NameInMap("ClassName")]
        [Validation(Required=true)]
        public string ClassName { get; set; }

        [NameInMap("Resources")]
        [Validation(Required=true)]
        public string Resources { get; set; }

        [NameInMap("UdfDescription")]
        [Validation(Required=false)]
        public string UdfDescription { get; set; }

        [NameInMap("CmdDescription")]
        [Validation(Required=false)]
        public string CmdDescription { get; set; }

        [NameInMap("ParameterDescription")]
        [Validation(Required=false)]
        public string ParameterDescription { get; set; }

        [NameInMap("ReturnValue")]
        [Validation(Required=false)]
        public string ReturnValue { get; set; }

        [NameInMap("Example")]
        [Validation(Required=false)]
        public string Example { get; set; }

        [NameInMap("ProjectIdentifier")]
        [Validation(Required=false)]
        public string ProjectIdentifier { get; set; }

        [NameInMap("FileId")]
        [Validation(Required=true)]
        public string FileId { get; set; }

    }

}
